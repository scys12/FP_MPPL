<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected function redirectTo()
    {
        if (auth()->user()->hasRole('admin')) {
            return '/admin/dashboard';
        }
        else if (auth()->user()->hasRole('teacher')) {
            return '/teacher/dashboard';
        }
        else return '/dashboard';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required', 'string', 'min:12'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user',
            'phone_number' => $data['phone_number'],
        ]);
    }

    protected function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'username' => $data['username'],
            'phone_number' => $data['phone_number'],
        ]);
    }
    
    public function registerUser(Request $request)
    {
        $userData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'string', 'max:20', 'unique:users'],
            'phone_number' => ['required', 'numeric', 'min:12'],
        ]);
        $data = $request->all();
        $data['role'] = 'user';
        event(new Registered($user = $this->createUser($data)));
        $this->guard()->login($user);
        return redirect($this->redirectPath());
    }

    public function registerAdmin(Request $request)
    {
        $userData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'string', 'max:20', 'unique:users'],
            'phone_number' => ['required', 'numeric', 'min:12'],
        ]);
        $data = $request->all();
        $data['role'] = 'admin';
        event(new Registered($user = $this->createUser($data)));
        $this->guard()->login($user);
        return redirect($this->redirectPath());
    }

    public function registerTeacher(Request $request)
    {
        $userData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:20', 'unique:users'],
            'phone_number' => ['required', 'numeric', 'min:12'],
        ]);
        $data = $request->all();
        $data['role'] = 'teacher';
        event(new Registered($user = $this->createUser($data)));
        $this->guard()->login($user);
        return redirect($this->redirectPath());
    }
}
