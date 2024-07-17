<?php

use Illuminate\Support\Facades\Route;

// ----- Home -----
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/videoBackground', function () {
    return view('home.videoBackground');
});

Route::get('/verticalSlider', function () {
    return view('home.verticalSlider');
});

Route::get('/gdprCookie', function () {
    return view('home.gdprCookie');
});


// ----- ListingGrid -----
Route::get('/fullWidth1', function () {
    return view('pages.ListingGrid.fullWidth1');
});

Route::get('/fullWidth2', function () {
    return view('pages.ListingGrid.fullWidth2');
});

Route::get('/boxed', function () {
    return view('pages.ListingGrid.boxed');
});

Route::get('/sidebarLeft', function () {
    return view('pages.ListingGrid.sidebarLeft');
});

Route::get('/sidebarRight', function () {
    return view('pages.ListingGrid.sidebarRight');
});

Route::get('/sidebarLeft2', function () {
    return view('pages.ListingGrid.sidebarLeft2');
});

Route::get('/sidebarRight2', function () {
    return view('pages.ListingGrid.sidebarRight2');
});



// ----- ListingRow -----
Route::get('/rowSidebar_Left', function () {
    return view('pages.ListingRow.rowSidebar_Left');
});

Route::get('/rowSidebar_Right', function () {
    return view('pages.ListingRow.rowSidebar_Right');
});

Route::get('/rowSidebar_Left2', function () {
    return view('pages.ListingRow.rowSidebar_Left2');
});

Route::get('/rowSidebar_Extended', function () {
    return view('pages.ListingRow.rowSidebar_Extended');
});

Route::get('/product_LargeImage', function () {
    return view('pages.ListingRow.product_LargeImage');
});

Route::get('/product_Carousel', function () {
    return view('pages.ListingRow.product_Carousel');
});

Route::get('/product_StickyInfo', function () {
    return view('pages.ListingRow.product_StickyInfo');
});



// ----- OtherPages -----
Route::get('/cartPage', function () {
    return view('pages.OtherPages.cartPage');
});

Route::get('/checkoutPage', function () {
    return view('pages.OtherPages.checkoutPage');
});

Route::get('/comfirmPurchasePage', function () {
    return view('pages.OtherPages.comfirmPurchasePage');
});

Route::get('/createAccountPage', function () {
    return view('pages.OtherPages.createAccountPage');
});

Route::get('/trackOrder', function () {
    return view('pages.OtherPages.trackOrder');
});

Route::get('/helpPage', function () {
    return view('pages.OtherPages.helpPage');
});

Route::get('/helpPage2', function () {
    return view('pages.OtherPages.helpPage2');
});

Route::get('/leaveReview', function () {
    return view('pages.OtherPages.leaveReview');
});


// ----- extraPages -----
Route::get('/headerStyle_2', function () {
    return view('extraPages.headerStyle_2');
});

Route::get('/headerStyle_3', function () {
    return view('extraPages.headerStyle_3');
});

Route::get('/headerStyle_4', function () {
    return view('extraPages.headerStyle_4');
});

Route::get('/headerStyle_5', function () {
    return view('extraPages.headerStyle_5');
});

Route::get('/404_Page', function () {
    return view('extraPages.404_Page');
});

Route::get('/signinModel', function () {
    return view('extraPages.signinModel');
});

Route::get('/contactUs', function () {
    return view('extraPages.contactUs');
});

Route::get('/about_1', function () {
    return view('extraPages.about_1');
});

Route::get('/about_2', function () {
    return view('extraPages.about_2');
});

Route::get('/modalAdvertise', function () {
    return view('extraPages.modalAdvertise');
});

Route::get('/modalNewsletter', function () {
    return view('extraPages.modalNewsletter');
});



// ----- blog -----
Route::get('/blog', function () {
    return view('blog.blog');
});

Route::get('/blogPost', function () {
    return view('blog.blogPost');
});



// ----- product -----
Route::get('/productDetails_1', function () {
    return view('product.productDetails_1');
});

Route::get('/productDetails_2', function () {
    return view('product.productDetails_2');
});

Route::get('/productDetails_3', function () {
    return view('product.productDetails_3');
});
