<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WhatsappController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*Home controllere*/

route::get('/redirect',[HomeController::class,'redirect']);
route::get('/',[HomeController::class,'index']);

/*Admin controllere*/
route::post('/data',[AdminController::class,'data']);
route::get('/stdata',[AdminController::class,'stdata']);
route::get('/addcourse',[AdminController::class,'addcourse']);
route::post('/uploadcourse',[AdminController::class,'uploadcourse']);
route::get('/viewcourse',[AdminController::class,'viewcourse']);
route::get('/back',[AdminController::class,'back']);
route::get('/viewstudentdata',[AdminController::class,'viewstudentdata']);
route::get('/editstd/{id}',[AdminController::class,'editstd']);
route::post('/updatestudent/{id}',[AdminController::class,'updatestudent']);
route::get('/delete/{id}',[AdminController::class,'delete']);
route::get('/editcourse/{id}',[AdminController::class,'editcourse']);
route::post('/updatecourse/{id}',[AdminController::class,'updatecourse']);
route::get('/deletecourse/{id}',[AdminController::class,'deletecourse']);
route::get('/addbatches',[AdminController::class,'addbatches']);
route::post('/uploadbatches',[AdminController::class,'uploadbatches']);

 
/*Slider controllere*/

route::get('/showsliders',[SliderController::class,'showsliders']);
route::get('/sliders',[SliderController::class,'sliders']);
route::post('/uploadsliders',[SliderController::class,'uploadesliders']);
route::get('/edit/{id}',[SliderController::class,'editsliders']);
route::post('/updatesliders/{id}',[SliderController::class,'updatesliders']);
route::get('/deletesliders/{id}',[SliderController::class,'deletesliders']);

/*Articles Controller*/
route::get('/showarticles',[ArticleController::class,'showarticles']);
route::get('/articles',[ArticleController::class,'articles']);
route::post('/uploadarticles',[ArticleController::class,'uploadearticles']);
route::get('/update/{id}',[ArticleController::class,'editarticles']);
route::post('/updatearticle/{id}',[ArticleController::class,'updatearticle']);
route::get('/deletearticle/{id}',[ArticleController::class,'deletearticle']);

/*category Controller*/
route::get('/showcategory',[CategoryController::class,'showcategory']);
route::get('/category',[CategoryController::class,'category']);
route::post('/uploadcategory',[CategoryController::class,'uploadcategory']);
route::get('/editcategory/{id}',[CategoryController::class,'editcategory']);
route::post('/updatecategory/{id}',[CategoryController::class,'updatecategory']);
route::get('/deletecategory/{id}',[CategoryController::class,'deletecategory']);


/*instructor Controller*/
route::get('/showinstructor',[InstructorController::class,'showinstructor']);
route::get('/instructor',[InstructorController::class,'instructor']);
route::post('/uploadinstructor',[InstructorController::class,'uploadinstructor']);
route::get('/editinstructor/{id}',[InstructorController::class,'editinstructor']);
route::post('/updateinstructor/{id}',[InstructorController::class,'updateinstructor']);
route::get('/deleteinstructor/{id}',[InstructorController::class,'deleteinstructor']);


/*Lesson Controller*/
Route::get('/showlesson/{id}',[LessonController::class,'showlesson']);
route::get('/lesson/{id}',[LessonController::class,'lesson']);
route::post('/uploadlesson',[LessonController::class,'uploadlesson']);
route::get('/editlesson/{id}',[LessonController::class,'editlesson']);
route::post('/updatelesson/{id}',[LessonController::class,'updatelesson']);
route::get('/deletelesson/{id}',[LessonController::class,'deletelesson']);

/*setting Controller*/
Route::get('/setting',[SettingController::class,'setting']);
Route::post('update', [SettingController::class, 'update']);
Route::get('/unlink-icon/{icon}', [SettingController::class, 'unlinkIcon'])->name('unlinkicon');
Route::get('/unlink-logo/{logo}', [SettingController::class, 'unlinklogo'])->name('unlinklogo');
Route::get('/sociallink',[SettingController::class,'sociallink']);
Route::post('updatesocial', [SettingController::class, 'updatesocial']);

/*seo Controller*/
Route::get('/seo',[SeoController::class,'seo']);
Route::post('/updateseo',[SeoController::class,'updateseo']);


/*User Controller*/

Route::get('/services',[UserController::class,'services']);
Route::get('/coursedetail/{id}',[UserController::class,'coursedetail']);
Route::get('/aboutus',[UserController::class,'aboutus']);
Route::get('/contactus',[UserController::class,'contactus']);
Route::post('/stdenroll',[UserController::class,'stdenroll']);
Route::get('/studentenroll',[UserController::class,'mycourses']);
Route::get('/studentenroll',[UserController::class,'mycourses']);
Route::post('/searchUser', [UserController::class,'searchuser']);


/*whatsapp*/


Route::get('/send-whatsapp', function () {
    return view('send_whatsapp');
});
Route::post('/send-whatsapp',[WhatsappController::class,'send']);














Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
