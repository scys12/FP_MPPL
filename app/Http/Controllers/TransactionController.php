<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Transaction;
use App\Payment;
use App\PrivateClass;
use MongoDB\BSON\UTCDateTime;
use App\UserPrivate;

class TransactionController extends Controller
{
		public function showBuyPacketPrivatePage(Request $request, $id)
		{
				$user_id = $request->user()->id;									
				$private = PrivateClass::findOrFail($id);
				$buy_two = Payment::where('user_ids', '=', $user_id)                              
													->where('type', "2")
													->where('date_started', '<=', new \DateTime())
													->where('date_end', '>=', new \DateTime())
													->where('private_ids', $private->id)
													->get();
				return view('client.private.buy',[
						'two' => count($buy_two),
						'private' => $private,
				]);
		}
		public function buyBelajarPrivate(Request $request, $id)
		{
				$user_id = $request->user()->id;
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $currentDate = Carbon::now();
				$oneMonth = Carbon::now()->addMonths(1);
				$private = PrivateClass::findOrFail($id);
        $transaction = Transaction::create([
            'type' => $request->paket,
            'price' => $request->price,
            'user_ids' => $user_id,
            'status' => 'waiting',
            'date_started' => $currentDate,
						'date_end' => $oneMonth,
						'teacher_ids' => $private->user_ids,
						'private_ids' => $private->id,
        ]);
        $params = array(
            'transaction_details' => array(
                'order_id' => $transaction->id,
                'gross_amount' => $request->price,
            ),
        );
        $snapToken = \Midtrans\Snap::createTransaction($params)->redirect_url;
        return redirect($snapToken);
		}

    public function buyBelajarMandiri(Request $request)
    {
        $user_id = $request->user()->id;
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $currentDate = Carbon::now();
        $oneMonth = Carbon::now()->addMonths(1);
        $transaction = Transaction::create([
            'type' => $request->paket,
            'price' => $request->price,
            'user_ids' => $user_id,
            'status' => 'waiting',
            'date_started' => $currentDate,
            'date_end' => $oneMonth,
        ]);
        $params = array(
            'transaction_details' => array(
                'order_id' => $transaction->id,
                'gross_amount' => $request->price,
            ),
        );
        $snapToken = \Midtrans\Snap::createTransaction($params)->redirect_url;
        return redirect($snapToken);
    }

    public function showBuyPacketPage(Request $request)
    {    
        $user_id = $request->user()->id;
        $buy_one = Payment::where('user_ids', '=', $user_id)
                            ->where('type', "1")
                            ->where('date_started', '<=', new \DateTime())
                            ->where('date_end', '>=', new \DateTime())
														->get();
        
        return view('buy_packet',[
            'one' => count($buy_one),
        ]);
    }

    public function notification(Request $request)
	{    
		$payload = $request->getContent();
		$notification = json_decode($payload);

		$validSignatureKey = hash("sha512", $notification->order_id . $notification->status_code . $notification->gross_amount . env('MIDTRANS_SERVER_KEY'));
		if ($notification->signature_key != $validSignatureKey) {
			return response(['message' => 'Invalid signature'], 403);
		}

		\Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

		$statusCode = null;

		$paymentNotification = new \Midtrans\Notification();
		$order = Transaction::findOrFail($paymentNotification->order_id);

		if ($order->isPaid()) {
			return response(['message' => 'The transaction has been paid before'], 422);
		}

		$transaction = $paymentNotification->transaction_status;
		$type = $paymentNotification->payment_type;
		$orderId = $paymentNotification->order_id;
		$fraud = $paymentNotification->fraud_status;

		$vaNumber = null;
		$vendorName = null;
		if (!empty($paymentNotification->va_numbers[0])) {
			$vaNumber = $paymentNotification->va_numbers[0]->va_number;
			$vendorName = $paymentNotification->va_numbers[0]->bank;
		}

		$paymentStatus = null;
		if ($transaction == 'capture') {
			// For credit card transaction, we need to check whether transaction is challenge by FDS or not
			if ($type == 'credit_card') {
				if ($fraud == 'challenge') {
					// TODO set payment status in merchant's database to 'Challenge by FDS'
					// TODO merchant should decide whether this transaction is authorized or not in MAP
					$paymentStatus = 'challenge';
				} else {
					// TODO set payment status in merchant's database to 'Success'
					$paymentStatus = 'completed';
				}
			}
		} else if ($transaction == 'settlement') {
			// TODO set payment status in merchant's database to 'Settlement'
			$paymentStatus = 'completed';
		} else if ($transaction == 'pending') {
			// TODO set payment status in merchant's database to 'Pending'
			$paymentStatus = 'pending';
		} else if ($transaction == 'deny') {
			// TODO set payment status in merchant's database to 'Denied'
			$paymentStatus = 'deny';
		} else if ($transaction == 'expire') {
			// TODO set payment status in merchant's database to 'expire'
			$paymentStatus = 'expire';
		} else if ($transaction == 'cancel') {
			// TODO set payment status in merchant's database to 'Denied'
			$paymentStatus = 'cancel';
        }		

        if($paymentStatus== 'completed'){
						$payment = Payment::create([
							'type' => $order->type,
							'price' => $order->price,
							'user_ids' => $order->user_ids,
							'order_ids' => $order->id,
							'status' => $paymentStatus,
							'date_started' => $order->date_started,
							'date_end' => $order->date_end,
							'teacher_ids' => $order->teacher_ids,
							'private_ids' => $order->private_ids,
					]);
					if ($order->type == 2) {
						UserPrivate::create([
							'user_ids' => $order->user_ids,
							'private_class_ids' => $order->private_ids
						]);
					}
				}

        $order->status = $paymentStatus;
        $order->save();

        $message = 'Payment status is : '. $paymentStatus;
		$response = [
			'code' => 200,
			'message' => $message,
		];

		return response($response, 200);
	}

	/**
	 * Show completed payment status
	 *
	 * @param Request $request payment data
	 *
	 * @return void
	 */
	public function completed(Request $request)
	{
		$code = $request->query('order_id');
		$order = Transaction::findOrFail($code);
		
		if ($order->status != 'completed') {
						if ($order->type == 1) {
							return redirect()->route('packet.buy')->with('status', "Sorry, we couldn't process your payment.");
						}else {
							return redirect()->route('packet.buy.private', ['id' => $order->private_ids])->with('status', "Sorry, we couldn't process your payment.");
						}
		}
		if ($order->type == 1) {
			return redirect()->route('packet.buy')->with('status', 'Thank you for completing the payment process!');
		}else {
			return redirect()->route('packet.buy.private', ['id' => $order->private_ids])->with('status', 'Thank you for completing the payment process!');
		}
	}

	/**
	 * Show unfinish payment page
	 *
	 * @param Request $request payment data
	 *
	 * @return void
	 */
	public function unfinish(Request $request)
	{
		$code = $request->query('order_id');
		$order = Transaction::findOrFail($code);

		if ($order->type == 1) {
			return redirect()->route('packet.buy')->with('status', "Sorry, we couldn't process your payment.");
		}else {
			return redirect()->route('packet.buy.private', ['id' => $order->private_ids])->with('status', "Sorry, we couldn't process your payment.");
		}
	}

	/**
	 * Show failed payment page
	 *
	 * @param Request $request payment data
	 *
	 * @return void
	 */
	public function failed(Request $request)
	{
		$code = $request->query('order_id');
		$order = Transaction::findOrFail($code);

		if ($order->type == 1) {
			return redirect()->route('packet.buy')->with('status', "Sorry, we couldn't process your payment.");
		}else {
			return redirect()->route('packet.buy.private', ['id' => $order->private_ids])->with('status', "Sorry, we couldn't process your payment.");
		}
	}

	public function historyPacket(Request $request)
	{
		$transactionsBelajar = $request->user()->transactions->where('type', 1);
		$transactionsPrivate = $request->user()->transactions->where('type', 2);
		return view('buy_history', compact('transactionsBelajar', 'transactionsPrivate'));	
	}
}
