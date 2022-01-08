<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return view('master');
});

// Lấy tất cả bài hát
Route::get(
    '/alltracks',
    [PageController::class, 'getAllTracks']
)->name('alltracks');
// Trang Chủ
Route::get(
    '/home',
    [PageController::class, 'getHome']
)->name('home');
// Trang Chủ Để
Route::get(
    '/theme',
    [PageController::class, 'getTheme']
)->name('theme');
// Trang Thể Loại
Route::get(
    '/genre',
    [PageController::class, 'getGenre']
)->name('genre');
// Trang Nghệ Sĩ
Route::get(
    '/artists',
    [PageController::class, 'getArtists']
)->name('artists');
// Trang Chi tiết Nghệ Sĩ
Route::get(
    '/artists-detail/{art}',
    [PageController::class, 'getArtistsDetail']
)->name('artists-detail');
// Trang Album
Route::get(
    '/album',
    [PageController::class, 'getAlbum']
)->name('album');
// Trang Sự kiện
Route::get(
    '/event',
    [PageController::class, 'getEvent']
)->name('event');
// Trang Tin tức
Route::get(
    '/news',
    [PageController::class, 'getNews']
)->name('news');
Route::get(
    '/hoai-linh-tro-lai-manh-me',
    [PageController::class, 'getEvent1']
)->name('news1');

Route::get(
    '/nam-ca-si-viet-duoc-ra-mat-o-han',
    [PageController::class, 'getEvent2']
)->name('news2');

Route::get(
    '/hoang-thuy-linh-sau-hai-nam-yen-ang',
    [PageController::class, 'getEvent3']
)->name('news3');
// Trang Đăng Ký
Route::get(
    '/sign-up',
    [PageController::class, 'getSignUp']
)->name('sign-up');
Route::post(
    '/sign-up',
    [PageController::class, 'postSignUp']
)->name('sign-up');
// Trang Đăng Nhập
Route::get(
    '/sign-in',
    [PageController::class, 'getSignIn']
)->name('sign-in');
Route::post(
    '/sign-in',
    [PageController::class, 'postSignIn']
)->name('sign-in');
// Đăng xuất
Route::get(
    '/sign-out',
    [PageController::class, 'getSignOut']
)->name('sign-out');
