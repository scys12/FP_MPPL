<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('register', 'Auth\RegisterController@registerUser')->name('register');
Route::post('/teacher/register', 'Auth\RegisterController@registerTeacher')->name('teacher.register');
Route::get('/dashboard', 'HomeController@showDashboard')->name('dashboard');

Route::group(['prefix' => 'products'], function () {
    Route::get('/', 'HomeController@showOurProducts')->name('our_products');
    Route::group(['middleware' => ['auth', 'user']], function () {
        Route::group(['prefix' => 'belajar_mandiri'], function () {
            Route::get('/', 'ProductController@showBelajarMandiriPage')->name('belajar_mandiri');
            Route::group(['prefix' => 'video_materi'], function () {
                Route::get('/', 'ProductController@showAllVideoMateri')->name('video_materi.index');
                Route::get('/{id}', 'ProductController@showVideoMateri')->name('video_materi.show');
                Route::post('/{id}/attend', 'UserVideoMateriController@registerSoal')->name('video_materi.attend');                

                Route::group(['prefix' => '{id}/question'], function () {
                    Route::post('/insert', 'QuestionController@addQuestion')->name('video_materi.question.insert');                    
                    Route::get('/{question_id}', 'QuestionController@showQuestion')->name('video_materi.question.show');

                    Route::group(['prefix' => '{question_id}/comment'], function () {
                        Route::post('/insert', 'CommentController@addComment')->name('video_materi.comment.insert');
                    });
                });
            });
            Route::group(['prefix' => 'soal_materi'], function () {
                Route::get('/', 'ProductController@showAllMateri')->name('soal_materi.index');
                Route::get('/{id}', 'ProductController@showsoalMateri')->name('soal_materi.show');
                Route::post('/{id}/attend', 'UserSoalMateriController@registerSoal')->name('soal_materi.attend');

                Route::group(['prefix' => '{id}/question'], function () {
                    Route::post('/insert', 'QuestionController@addQuestionSoalMateri')->name('soal_materi.question.insert');                    
                    Route::get('/{question_id}', 'QuestionController@showQuestionSoalMateri')->name('soal_materi.question.show');

                    Route::group(['prefix' => '{question_id}/comment'], function () {
                        Route::post('/insert', 'CommentController@addCommentSoalMateri')->name('soal_materi.comment.insert');
                    });
                });
            });
        });
        Route::group(['prefix' => 'private'], function () {
            Route::get('/', 'ProductController@showPrivatePage')->name('private');
            Route::get('/{id}', 'ProductController@showDetailPrivatePage')->name('private.show');
        });
    });
});

Route::group(['prefix' => 'freemalangga'], function () {
    Route::get('/', 'HomeController@showFreemalanggaPage')->name('freemalangga');
    Route::get('/{id}', 'HomeController@showFreemalanggaDetailPage')->name('freemalangga.show');
});

Route::get('/transfer', 'HomeController@displayHowToTransferPage')->name('how_to_transfers');
Route::group(['prefix' => 'promo'], function () {
    Route::get('/', 'HomeController@showPromoPage')->name('promo');
    Route::get('/detail', 'HomeController@showDetailPromoPage')->name('promo.detail');
});
Route::group(['middleware' => ['auth', 'user']], function () {
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', 'HomeController@showProfilePage')->name('profile.show');
        Route::get('/update', 'HomeController@showUpdateProfilePage')->name('profile.update');
    });
    Route::get('/buy/private/{id}', 'TransactionController@showBuyPacketPrivatePage')->name('packet.buy.private');
    Route::post('/buy/private/{id}', 'TransactionController@buyBelajarPrivate')->name('packet.buy.private');
    Route::get('/buy/belajar_mandiri', 'TransactionController@showBuyPacketPage')->name('packet.buy');
    Route::post('/buy/belajar_mandiri', 'TransactionController@buyBelajarMandiri')->name('packet.buy');    
    Route::get('/buy/completed', 'TransactionController@completed')->name('packet.completed');
    Route::get('/buy/failed', 'TransactionController@failed')->name('packet.failed');
    Route::get('/buy/unfinished', 'TransactionController@unfinished')->name('packet.unfinished');
    
    Route::get('/payment', 'HomeController@showPaymentPage')->name('packet.payment');
});

Route::post('/buy/notification', 'TransactionController@notification')->name('packet.notification');
Route::get('/teacher/register', 'TeacherController@register')->name('teacher.register');
Route::group(['prefix' => 'teacher', 'middleware' => ['teacher', 'auth']], function () {
    Route::get('/dashboard', 'TeacherController@showDashboard')->name('teacher.dashboard');
    
    Route::group(['prefix' => 'class'], function () {
        Route::get('/', 'Teacher\ClassController@showClass')->name('teacher.class.index');
        Route::post('/{id}zoom', 'Teacher\ClassController@addZoom')->name('teacher.class.zoom');
        Route::get('/insert', 'Teacher\ClassController@showClassInsertPage')->name('teacher.class.insert');
        Route::get('/{id}', 'Teacher\ClassController@showDetailClass')->name('teacher.class.show');
        Route::post('/insert', 'Teacher\ClassController@addClass')->name('teacher.class.insert');
        Route::get('/update/{id}', 'Teacher\ClassController@showClassUpdatePage')->name('teacher.class.update');
        Route::put('/update/{id}', 'Teacher\ClassController@updateClass')->name('teacher.class.update');
        Route::delete('/delete', 'Teacher\ClassController@deleteClass')->name('teacher.class.delete');
    });

    // Route::group(['prefix' => 'private'], function () {
    //     Route::get('/detail', 'TeacherController@showDetailPrivateInfo')->name('teacher.private.detail');
    //     Route::get('/insert', 'TeacherController@showPrivateInfoInsertPage')->name('teacher.private.insert');
    //     Route::get('/update', 'TeacherController@showPrivateInfoUpdatePage')->name('teacher.private.update');        
    // });

    Route::group(['prefix' => 'video_materi'], function () {
        Route::get('/insert', 'Teacher\VideoMateriController@displayVideoMateriInsertPage')->name('teacher.video_materi.insert');
        Route::get('/', 'Teacher\VideoMateriController@displayAllVideoMateri')->name('teacher.video_materi.index');
        Route::get('/{id}', 'Teacher\VideoMateriController@showVideoMateri')->name('teacher.video_materi.show');
        Route::post('/insert', 'Teacher\VideoMateriController@insertVideoMateri')->name('teacher.video_materi.insert');
        Route::get('/update/{id}', 'Teacher\VideoMateriController@displayVideoMateriUpdatePage')->name('teacher.video_materi.update');
        Route::put('/update/{id}', 'Teacher\VideoMateriController@updateVideoMateri')->name('teacher.video_materi.update');
        Route::delete('/delete', 'Teacher\VideoMateriController@deleteVideoMateri')->name('teacher.video_materi.delete');        
        Route::group(['prefix' => '{id}/question'], function () {
            Route::post('/insert', 'TeacherController@addQuestion')->name('teacher.video_materi.question.insert');
            Route::get('/{question_id}', 'TeacherController@showQuestion')->name('teacher.video_materi.question.show');

            Route::group(['prefix' => '{question_id}/comment'], function () {
                Route::post('/insert', 'TeacherController@addComment')->name('teacher.video_materi.comment.insert');
            });
        });
    });

    Route::group(['prefix' => 'materi'], function () {
        Route::get('/insert', 'Teacher\MateriController@displayMateriInsertPage')->name('teacher.materi.insert');
        Route::get('/', 'Teacher\MateriController@displayAllMateri')->name('teacher.materi.index');
        Route::get('/{id}', 'Teacher\MateriController@showMateri')->name('teacher.materi.show');
        Route::post('/insert', 'Teacher\MateriController@insertMateri')->name('teacher.materi.insert');
        Route::get('/update/{id}', 'Teacher\MateriController@displayMateriUpdatePage')->name('teacher.materi.update');
        Route::put('/update/{id}', 'Teacher\MateriController@updateMateri')->name('teacher.materi.update');
        Route::delete('/delete', 'Teacher\MateriController@deleteMateri')->name('teacher.materi.delete');
        Route::group(['prefix' => '{id}/question'], function () {
            Route::post('/insert', 'TeacherController@addQuestionSoalMateri')->name('teacher.soal_materi.question.insert');                    
            Route::get('/{question_id}', 'TeacherController@showQuestionSoalMateri')->name('teacher.soal_materi.question.show');

            Route::group(['prefix' => '{question_id}/comment'], function () {
                Route::post('/insert', 'TeacherController@addCommentSoalMateri')->name('teacher.soal_materi.comment.insert');
            });
        });
    });

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', 'TeacherController@showProfile')->name('teacher.profile.show');
        Route::get('/update', 'TeacherController@updateProfile')->name('teacher.profile.update');
    });
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/freemalangga', 'AdminController@displayAllFreemalangga')->name('admin.freemalangga.index');
    Route::get('/dashboard', 'AdminController@showDashboard')->name('admin.dashboard');
    
    Route::group(['prefix' => 'freemalangga'], function () {
        Route::get('/insert', 'AdminController@displayFreemalanggaInsertPage')->name('admin.freemalangga.insert');
        Route::post('/insert', 'AdminController@insertFree')->name('admin.freemalangga.insert');
        Route::put('/{id}/update', 'AdminController@updateFreemalangga')->name('admin.freemalangga.put');
        Route::delete('/delete', 'AdminController@deleteFreemalangga')->name('admin.freemalangga.delete');
        Route::get('/{id}/update', 'AdminController@displayFreemalanggaUpdatePage')->name('admin.freemalangga.put');
        Route::get('/{id}', 'AdminController@displayFreemalangga')->name('admin.freemalangga.show');
    });

    Route::group(['prefix' => 'student'], function () {
        Route::get('/', 'AdminController@displayAllStudent')->name('admin.student.index');
        Route::get('/insert', 'AdminController@displayStudentInsertPage')->name('admin.student.insert');
        Route::get('/update', 'AdminController@displayStudentUpdatePage')->name('admin.student.put');
    });

    Route::group(['prefix' => 'teacher'], function () {
        Route::get('/', 'AdminController@displayAllTeacher')->name('admin.teacher.index');
        Route::get('/insert', 'AdminController@displayTeacherInsertPage')->name('admin.teacher.insert');
        Route::get('/update', 'AdminController@displayTeacherUpdatePage')->name('admin.teacher.put');
    });
});