<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
    Route::get('',[
        'as'=>'admin.dashboard',
        'uses'=> 'admins\DashboardController@index'
    ]);

    Route::get('login-admin',[
        'as'=>'admin.login',
        'uses'=>'admins\HomeController@login'
    ]);

    Route::post('signin-admin',[
        'as'=>'admin.signin',
        'uses'=>'admins\HomeController@signin'
    ]);

    Route::get('logout',[
        'as'=>'admin.logout',
        'uses'=>'admins\HomeController@logout'
    ]);

    Route::prefix('blog')->middleware('logged')->group(function(){
        Route::get('',[
            'as'=>'blog.index',
            'uses'=>'admins\BlogController@index'
        ]);
        Route::get('create',[
            'as'=>'blog.create',
            'uses'=>'admins\BlogController@create'
        ]);
        Route::post('store',[
            'as'=>'blog.store',
            'uses'=>'admins\BlogController@store'
        ]);
        Route::get('edit/{id}',[
            'as'=>'blog.edit',
            'uses'=>'admins\BlogController@edit'
        ]);
        Route::post('update/{id}',[
            'as'=>'blog.update',
            'uses'=>'admins\BlogController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'blog.delete',
            'uses'=>'admins\BlogController@delete'
        ]);
    });

    Route::prefix('contact')->middleware('logged')->group(function(){
        Route::get('',[
            'as'=>'contact.index',
            'uses'=>'admins\ContactController@index'
        ]);
        Route::get('create',[
            'as'=>'contact.create',
            'uses'=>'admins\ContactController@create'
        ]);
        Route::post('store',[
            'as'=>'contact.store',
            'uses'=>'admins\ContactController@store'
        ]);
        Route::get('edit/{id}',[
            'as'=>'contact.edit',
            'uses'=>'admins\ContactController@edit'
        ]);
        Route::post('update/{id}',[
            'as'=>'contact.update',
            'uses'=>'admins\ContactController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'contact.delete',
            'uses'=>'admins\ContactController@delete'
        ]);
    });

    Route::prefix('logo')->middleware('logged')->group(function(){
        Route::get('',[
            'as'=>'logo.index',
            'uses'=>'admins\LogoController@index'
        ]);
        Route::get('create',[
            'as'=>'logo.create',
            'uses'=>'admins\LogoController@create'
        ]);
        Route::post('store',[
            'as'=>'logo.store',
            'uses'=>'admins\LogoController@store'
        ]);
        Route::get('edit/{id}',[
            'as'=>'logo.edit',
            'uses'=>'admins\LogoController@edit'
        ]);
        Route::post('update/{id}',[
            'as'=>'logo.update',
            'uses'=>'admins\LogoController@update'
            ]);
        Route::get('delete/{id}',[
            'as'=>'logo.delete',
            'uses'=>'admins\LogoController@delete'
            ]);
    });

    Route::prefix('banner')->middleware('logged')->group(function(){
        Route::get('',[
            'as'=>'banner.index',
            'uses'=>'admins\BannerController@index'
        ]);
        Route::get('create',[
            'as'=>'banner.create',
            'uses'=>'admins\BannerController@create'
        ]);
        Route::post('store',[
            'as'=>'banner.store',
            'uses'=>'admins\BannerController@store'
        ]);
        Route::get('edit/{id}',[
            'as'=>'banner.edit',
            'uses'=>'admins\BannerController@edit'
        ]);
        Route::post('update/{id}',[
            'as'=>'banner.update',
            'uses'=>'admins\BannerController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'banner.delete',
            'uses'=>'admins\BannerController@delete'
        ]);
    });

    Route::prefix('profile')->group(function(){
        Route::get('',[
            'as'=>'profile.index',
            'uses'=>'admins\ProfileController@index'
        ]);
        Route::get('edit/{id}',[
            'as'=>'profile.edit',
            'uses'=>'admins\ProfileController@edit'
        ]);
        Route::post('update/{id}',[
            'as'=>'profile.update',
            'uses'=>'admins\ProfileController@update'
        ]);
        Route::get('edit-password/{id}',[
            'as'=>'profile.edit_password',
            'uses'=>'admins\ProfileController@edit_password'
        ]);
        Route::post('update-password/{id}',[
            'as'=>'profile.update_password',
            'uses'=>'admins\ProfileController@update_password'
        ]);
    });

    Route::prefix('category')->middleware('logged')->group(function(){
        Route::get('',[
            'as'=>'category.index',
            'uses'=>'admins\CategoryController@index'
        ]);
        Route::get('create',[
            'as'=>'category.create',
            'uses'=>'admins\CategoryController@create'
        ]);
        Route::post('store',[
            'as'=>'category.store',
            'uses'=>'admins\CategoryController@store'
        ]);
        Route::get('edit/{id}',[
            'as'=>'category.edit',
            'uses'=>'admins\CategoryController@edit'
        ]);
        Route::post('update/{id}',[
            'as'=>'category.update',
            'uses'=>'admins\CategoryController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'category.delete',
            'uses'=>'admins\CategoryController@delete'
        ]);
    });

    Route::prefix('brand')->middleware('logged')->group(function(){
        Route::get('',[
            'as'=>'brand.index',
            'uses'=>'admins\BrandController@index'
        ]);
        Route::get('create',[
            'as'=>'brand.create',
            'uses'=>'admins\BrandController@create'
        ]);
        Route::post('store',[
            'as'=>'brand.store',
            'uses'=>'admins\BrandController@store'
        ]);
        Route::get('edit/{id}',[
            'as'=>'brand.edit',
            'uses'=>'admins\BrandController@edit'
        ]);
        Route::post('update/{id}',[
            'as'=>'brand.update',
            'uses'=>'admins\BrandController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'brand.delete',
            'uses'=>'admins\BrandController@delete'
        ]);
    });

    Route::prefix('product')->middleware('logged')->group(function(){
        Route::get('',[
            'as'=>'product.index',
            'uses'=>'admins\ProductController@index'
        ]);
        Route::get('create',[
            'as'=>'product.create',
            'uses'=>'admins\ProductController@create'
        ]);
        Route::post('store',[
            'as'=>'product.store',
            'uses'=>'admins\ProductController@store'
        ]);
        Route::get('edit/{id}',[
            'as'=>'product.edit',
            'uses'=>'admins\ProductController@edit'
        ]);
        Route::post('update/{id}',[
            'as'=>'product.update',
            'uses'=> 'admins\ProductController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'product.delete',
            'uses'=> 'admins\ProductController@delete'
        ]);
    });

    Route::prefix('product-detail')->middleware('logged')->group(function(){
        Route::get('/{id}',[
            'as' => 'product_detail.index',
            'uses' => 'admins\ProductDetailController@index'
        ]);
        Route::post('store/{id}',[
            'as' => 'product_detail.store',
            'uses' => 'admins\ProductDetailController@store'
        ]);
        Route::get('edit/{id}',[
            'as' => 'product_detail.edit',
            'uses' => 'admins\ProductDetailController@edit'
        ]);
        Route::post('update/{id}',[
            'as' => 'product_detail.update',
            'uses' => 'admins\ProductDetailController@update'
        ]);
        Route::get('delete/{id}',[
            'as' => 'product_detail.delete',
            'uses' => 'admins\ProductDetailController@delete'
        ]);
    });

    Route::prefix('order')->middleware('logged')->group(function(){
        Route::get('',[
            'as'=>'order.index',
            'uses'=>'admins\OrderController@index'
        ]);
        Route::get('update_order/{id}/{status}',[
            'as'=>'order.update',
            'uses'=>'admins\OrderController@update'
        ]);
        Route::get('order-detail/{id}',[
            'as'=>'order_detail.index',
            'uses'=>'admins\OrderController@OrderDetail'
        ]);
    });

    Route::prefix('contact-user')->middleware('logged')->group(function(){
        Route::get('',[
            'as'=>'contact-user.index',
            'uses'=>'admins\ContactUserController@index'
        ]);
    });
});
