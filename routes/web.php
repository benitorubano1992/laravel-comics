<?php

use App\Http\Controllers\ProfileController;
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
    $data = config('comics');
    $icons = [
        [
            "img" => 'resources/images/buy-comics-digital-comics.png',
            "title" => "Digital comics"
        ],
        [
            "img" => 'resources/images/buy-comics-merchandise.png',
            "title" => "Digital comics"
        ],
        [
            "img" => 'resources/images/buy-comics-shop-locator.png',
            "title" => "Digital comics"
        ],
        [
            "img" => 'resources/images/buy-comics-subscriptions.png',
            "title" => "Digital comics"
        ],
        [
            "img" => 'resources/images/buy-dc-power-visa.svg',
            "title" => "DC Power Visa"
        ]
    ];
    $social = [
        "resources/images/footer-facebook.png",
        "resources/images/footer-periscope.png",
        "resources/images/footer-pinterest.png",
        "resources/images/footer-twitter.png",
        "resources/images/footer-youtube.png",
    ];

    return view('home', compact('data', 'icons', 'social'));
});
