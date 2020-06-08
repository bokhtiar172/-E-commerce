<?php

use Carbon\Carbon;

Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//socilite route
Route::get('auth/{provider}','auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback','auth\LoginController@handleProviderCallback');




Route::group([ "as"=>'admin.' , "prefix"=>'admin' , "namespace"=>'admin' , "middleware"=>['auth','admin']],function(){
      Route::get('dashbord','adminDashbordController@index')->name('dashbord');

      //category
      Route::get('add/category','categoryController@add_category')->name('add.category');
      Route::post('save/category','categoryController@save_category')->name('save.category');
      Route::get('all/category','categoryController@all_category')->name('all.category');
      Route::get('/unactive_category/{id}','categoryController@unactive_category');
      Route::get('/active_category/{id}','categoryController@active_category');
      Route::get('/edit_category/{id}','categoryController@edit_category');
      Route::post('/update-category/{id}','categoryController@update_category');
      Route::get('/delete_category/{id}','categoryController@delete_category');

      //brand
      Route::get('add/brand','brandController@add_brand')->name('add.brand');
      Route::post('save/brand','brandController@save_brand')->name('save.brand');
      Route::get('all/brand','brandController@all_brand')->name('all.brand');
      Route::get('/unactive_brand/{id}','brandController@unactive_brand');
      Route::get('/active_brand/{id}','brandController@active_brand');
      Route::get('/edit_brand/{id}','brandController@edit_brand');
      Route::post('/update-brand/{id}','brandController@update_brand');
      Route::get('/delete_brand/{id}','brandController@delete_brand');

      //flash sell
      Route::get('add/flashsell','flashsellController@add_flashsell')->name('add.flashsell');
      Route::post('save/flashsell','flashsellController@save_flashsell')->name('save.flashsell');
      Route::get('all/flashsell','flashsellController@all_flashsell')->name('all.flashsell');
      Route::get('/unactive_flashsell/{id}','flashsellController@unactive_flashsell');
      Route::get('/active_flashsell/{id}','flashsellController@active_flashsell');
      Route::get('/edit_flashsell/{id}','flashsellController@edit_flashsell');
      Route::post('/update/{id}','flashsellController@update_flashsell');
      Route::get('/delete_flashsell/{id}','flashsellController@delete_flashsell');

      //offer sell
      Route::get('add/offer','offerController@add_offer')->name('add.offer');
      Route::post('save/offer','offerController@save_offer')->name('save.offer');
      Route::get('all/offer','offerController@all_offer')->name('all.offer');
      Route::get('/unactive_offer/{id}','offerController@unactive_offer');
      Route::get('/active_offer/{id}','offerController@active_offer');
      Route::get('/edit_offer/{id}','offerController@edit_offer');
      Route::post('/update/offer/{id}','offerController@update_offer');
      Route::get('/delete_offer/{id}','offerController@delete_offer');

      //product sell
      Route::get('add/product','productController@add_product')->name('add.product');
      Route::post('save/product','productController@save_product')->name('save.product');
      Route::get('all/product','productController@all_product')->name('all.product');
      Route::get('/unactive_product/{id}','productController@unactive_product');
      Route::get('/active_product/{id}','productController@active_product');
      Route::get('/edit_product/{id}','productController@edit_product');
      Route::post('/update/offer/{id}','productController@update_porduct');
      Route::get('/delete_product/{id}','productController@delete_delete');

      //product sell
      Route::get('add/payment','paymentController@add_payment')->name('add.payment');
      Route::post('save/payment','paymentController@save_payment')->name('save.payment');/*
      Route::get('all/product','productController@all_product')->name('all.product');
      Route::get('/unactive_product/{id}','productController@unactive_product');
      Route::get('/active_product/{id}','productController@active_product');
      Route::get('/edit_product/{id}','productController@edit_product');
      Route::post('/update/offer/{id}','productController@update_porduct');
      Route::get('/delete_product/{id}','productController@delete_delete');*/

      //sponcer
      Route::get('add/sponcer','sponcerController@add_sponcer')->name('add.sponcer');
      Route::post('save/sponcer','sponcerController@save_sponcer')->name('save.sponcer');
      Route::get('all/sponcer','sponcerController@all_sponcer')->name('all.sponcer');
      Route::get('/unactive_sponcer/{id}','sponcerController@unactive_sponcer');
      Route::get('/active_sponcer/{id}','sponcerController@active_sponcer');
      Route::get('/delete_sponcer/{id}','sponcerController@delete_sponcer');

      //product sell
      Route::get('add/slider','sliderController@add_slider')->name('add.slider');
      Route::post('save/slider','sliderController@save_slider')->name('save.slider');/*
      Route::get('all/product','sliderController@all_product')->name('all.product');
      Route::get('/unactive_product/{id}','sliderController@unactive_product');
      Route::get('/active_product/{id}','sliderController@active_product');
      Route::get('/edit_product/{id}','sliderController@edit_product');
      Route::post('/update/offer/{id}','sliderController@update_porduct');
      Route::get('/delete_product/{id}','sliderController@delete_delete');*/


      //order area ----
      Route::get('/order-show','orderoutController@order_show');
      Route::get('/single-view-product/{id}','orderoutController@single_view_product');
      Route::get('/unpaid/{id}','orderoutController@unpaid');
      Route::get('/uncomplate/{id}','orderoutController@uncomplate');


      //report of product area
      Route::get('/today-report','reportController@today_report');
      Route::get('/month/{month}','reportController@month');





});
//user area ----------------------------------------------------------------------

Route::group([ "as"=>'user.' , "prefix"=>'user' , "namespace"=>'user' , "middleware"=>['auth','user']],function(){
      //logout are
      Route::get('user-logout','userDashbordController@logout')->name('logout');
      //logout area end
      //search are
      Route::post('search','userDashbordController@search')->name('search');
      //search area end
      Route::get('dashbord','userDashbordController@index')->name('dashbord');
      Route::get('/category_show_id_by_id/{id}','categoryController@category_show_id_by_id');
      Route::get('/show_product_brand_by_brand/{id}','brandController@show_product_brand_by_brand');
 
      //cart product area
      Route::get('/cart-store/{id}','cartController@cart_store');
      Route::get('/search-cart-store/{id}','cartController@search_cart_store');
      Route::get('/show_all_cart','cartController@cart_show');
      Route::post('/update-quantity/{id}','cartController@update_quantity');
      Route::get('/cheeckout','cheeckoutController@cheeckout');
      Route::post('/save-order','cheeckoutController@save_order');
      Route::get('/cart-delete/{id}','cartController@cart_delete');
      //wishlists area
      Route::get('/wishlists/{id}','wishlistController@wishlist_store');
      Route::get('/all-wishlist-show','wishlistController@all_wishlist_show');
      Route::get('/wishlist-delete/{id}','wishlistController@wishlist_delete');
      //single view product  product_show
      Route::get('/product-show/{id}','productController@product_show');


});
