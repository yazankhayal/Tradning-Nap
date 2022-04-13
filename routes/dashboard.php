<?php
/**
 * Created by PhpStorm.
 * User: Napster
 * Date: 6/20/2020
 * Time: 5:17 PM
 */

// Dashboard
Route::group(['prefix' => 'dashboard', 'middleware' => 'dashboard'], function () {

    // Dashboard address
    Route::group(['prefix' => '/address'], function () {
        Route::get('', 'Dashboard\AddressController@index')->name('dashboard_address.index');
        Route::get('/add_edit/{id?}', 'Dashboard\AddressController@add_edit')->name('dashboard_address.add_edit');
        Route::get('/get_data_by_id', 'Dashboard\AddressController@get_data_by_id')->name('dashboard_address.get_data_by_id');
        Route::get('/deleted', 'Dashboard\AddressController@deleted')->name('dashboard_address.deleted');
        Route::post('/get_data', 'Dashboard\AddressController@get_data')->name('dashboard_address.get_data');
        Route::post('/post_data', 'Dashboard\AddressController@post_data')->name('dashboard_address.post_data');
    });

    // Dashboard address_translate
    Route::group(['prefix' => '/address_translate'], function () {
        Route::post('/post_data', 'Dashboard\AddressTranslateController@post_data')->name('dashboard_address_translate.post_data');
        Route::get('/get_data', 'Dashboard\AddressTranslateController@get_data_by_id')->name('dashboard_address_translate.get_data_by_id');
    });

    Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard_admin.index');
    Route::get('/send_email', 'Dashboard\DashboardController@send_email')->name('dashboard_send_email.index');
    Route::get('/newsletter', 'Dashboard\DashboardController@newsletter')->name('dashboard_send_email.newsletter');
    Route::get('/dashboard_sidebar_mini', 'Dashboard\DashboardController@dashboard_sidebar_mini')->name('dashboard_sidebar_mini');
    Route::get('/dashboard_sidebar_color', 'Dashboard\DashboardController@dashboard_sidebar_color')->name('dashboard_sidebar_color');

    Route::post('/send_email_send', 'Dashboard\DashboardController@send_email_send')->name('dashboard_send_email.send');
    Route::get('/dashboard/languages', 'Dashboard\DashboardController@languages')->name('dashboard_admin.languages');
    Route::get('/dashboard/languages_exption_em', 'Dashboard\DashboardController@languages_exption_em')->name('dashboard_admin.languages_exption_em');


    // Dashboard users
    Route::group(['prefix' => '/users'], function () {
        Route::get('', 'Dashboard\UsersController@index')->name('dashboard_users.index');
        Route::get('/add_edit/{id?}', 'Dashboard\UsersController@add_edit')->name('dashboard_users.add_edit');
        Route::get('/get_data_by_id', 'Dashboard\UsersController@get_data_by_id')->name('dashboard_users.get_data_by_id');
        Route::get('/deleted', 'Dashboard\UsersController@deleted')->name('dashboard_users.deleted');
        Route::post('/get_data', 'Dashboard\UsersController@get_data')->name('dashboard_users.get_data');
        Route::post('/post_data', 'Dashboard\UsersController@post_data')->name('dashboard_users.post_data');
        Route::get('/confirm_email', 'Dashboard\UsersController@confirm_email')->name('dashboard_users.confirm_email');
        Route::get('/suspended', 'Dashboard\UsersController@suspended')->name('dashboard_users.suspended');
    });

    // Dashboard language
    Route::group(['prefix' => '/language'], function () {
        Route::get('', 'Dashboard\LanguageController@index')->name('dashboard_language.index');
        Route::get('/lang/{id?}', 'Dashboard\LanguageController@lang')->name('dashboard_language.lang');
        Route::post('/lang_post', 'Dashboard\LanguageController@lang_post')->name('dashboard_language.lang_post');
        Route::get('/add_edit/{id?}', 'Dashboard\LanguageController@add_edit')->name('dashboard_language.add_edit');
        Route::get('/get_data_by_id', 'Dashboard\LanguageController@get_data_by_id')->name('dashboard_language.get_data_by_id');
        Route::get('/deleted', 'Dashboard\LanguageController@deleted')->name('dashboard_language.deleted');
        Route::post('/get_data', 'Dashboard\LanguageController@get_data')->name('dashboard_language.get_data');
        Route::post('/post_data', 'Dashboard\LanguageController@post_data')->name('dashboard_language.post_data');
    });

    // Dashboard setting
    Route::group(['prefix' => '/setting'], function () {
        Route::get('', 'Dashboard\SettingController@index')->name('dashboard_setting.index');
        Route::post('/post_data', 'Dashboard\SettingController@post_data')->name('dashboard_setting.post_data');
        Route::get('/get_data_by_id', 'Dashboard\SettingController@get_data_by_id')->name('dashboard_setting.get_data_by_id');
    });

    // Dashboard setting_translate
    Route::group(['prefix' => '/setting_translate'], function () {
        Route::post('/post_data', 'Dashboard\SettingTranslateController@post_data')->name('dashboard_setting_translate.post_data');
        Route::get('/get_data', 'Dashboard\SettingTranslateController@get_data_by_id')->name('dashboard_setting_translate.get_data_by_id');
    });

    // Dashboard posts
    Route::group(['prefix' => '/posts'], function () {
        Route::get('', 'Dashboard\PostsController@index')->name('dashboard_posts.index');
        Route::get('/add_edit/{id?}', 'Dashboard\PostsController@add_edit')->name('dashboard_posts.add_edit');
        Route::get('/get_data_by_id', 'Dashboard\PostsController@get_data_by_id')->name('dashboard_posts.get_data_by_id');
        Route::get('/deleted', 'Dashboard\PostsController@deleted')->name('dashboard_posts.deleted');
        Route::post('/get_data', 'Dashboard\PostsController@get_data')->name('dashboard_posts.get_data');
        Route::post('/post_data', 'Dashboard\PostsController@post_data')->name('dashboard_posts.post_data');
        Route::get('/featured', 'Dashboard\PostsController@featured')->name('dashboard_posts.featured');
    });

    // Dashboard posts_translate
    Route::group(['prefix' => '/posts_translate'], function () {
        Route::post('/post_data', 'Dashboard\PostsTranslateController@post_data')->name('dashboard_posts_translate.post_data');
        Route::get('/get_data', 'Dashboard\PostsTranslateController@get_data_by_id')->name('dashboard_posts_translate.get_data_by_id');
    });

    // Dashboard products
    Route::group(['prefix' => '/products'], function () {
        Route::get('', 'Dashboard\ProductsController@index')->name('dashboard_products.index');
        Route::get('/copy', 'Dashboard\ProductsController@copy')->name('dashboard_products.copy');
        Route::get('/add_edit/{id?}', 'Dashboard\ProductsController@add_edit')->name('dashboard_products.add_edit');
        Route::get('/get_data_by_id', 'Dashboard\ProductsController@get_data_by_id')->name('dashboard_products.get_data_by_id');
        Route::get('/deleted', 'Dashboard\ProductsController@deleted')->name('dashboard_products.deleted');
        Route::post('/get_data', 'Dashboard\ProductsController@get_data')->name('dashboard_products.get_data');
        Route::post('/post_data', 'Dashboard\ProductsController@post_data')->name('dashboard_products.post_data');
        Route::get('/featured', 'Dashboard\ProductsController@featured')->name('dashboard_products.featured');
        Route::get('/trending', 'Dashboard\ProductsController@trending')->name('dashboard_products.trending');

        Route::post('/related_products', 'Dashboard\ProductsController@related_products')->name('dashboard_products.related_products');
        Route::post('/get_related_products', 'Dashboard\ProductsController@get_related_products')->name('dashboard_products.get_related_products');

        Route::post('/post_data_rating', 'Dashboard\ProductsController@post_data_rating')->name('dashboard_products.post_data_rating');

        Route::post('/uploadjquery', 'Dashboard\ProductsController@uploadjquery')->name('dashboard_products.uploadjquery');
        Route::get('/deleteuploadjquery', 'Dashboard\ProductsController@deleteuploadjquery')->name('dashboard_products.deleteuploadjquery');
    });

    // Dashboard products_translate
    Route::group(['prefix' => '/products_translate'], function () {
        Route::post('/post_data', 'Dashboard\ProductsTranslateController@post_data')->name('dashboard_products_translate.post_data');
        Route::get('/get_data', 'Dashboard\ProductsTranslateController@get_data_by_id')->name('dashboard_products_translate.get_data_by_id');
    });

    // Dashboard testimonials
    Route::group(['prefix' => '/testimonials'], function () {
        Route::get('', 'Dashboard\TestimonialsController@index')->name('dashboard_testimonials.index');
        Route::get('/add_edit/{id?}', 'Dashboard\TestimonialsController@add_edit')->name('dashboard_testimonials.add_edit');
        Route::get('/get_data_by_id', 'Dashboard\TestimonialsController@get_data_by_id')->name('dashboard_testimonials.get_data_by_id');
        Route::get('/deleted', 'Dashboard\TestimonialsController@deleted')->name('dashboard_testimonials.deleted');
        Route::post('/get_data', 'Dashboard\TestimonialsController@get_data')->name('dashboard_testimonials.get_data');
        Route::post('/post_data', 'Dashboard\TestimonialsController@post_data')->name('dashboard_testimonials.post_data');
    });

    // Dashboard testimonials_translate
    Route::group(['prefix' => '/testimonials_translate'], function () {
        Route::post('/post_data', 'Dashboard\TestimonialsTranslateController@post_data')->name('dashboard_testimonials_translate.post_data');
        Route::get('/get_data', 'Dashboard\TestimonialsTranslateController@get_data_by_id')->name('dashboard_testimonials_translate.get_data_by_id');
    });

    // Dashboard newsletter
    Route::group(['prefix' => '/newsletter'], function () {
        Route::get('', 'Dashboard\NewsletterController@index')->name('dashboard_newsletter.index');
        Route::get('/deleted', 'Dashboard\NewsletterController@deleted')->name('dashboard_newsletter.deleted');
        Route::post('/get_data', 'Dashboard\NewsletterController@get_data')->name('dashboard_newsletter.get_data');
    });

    // Dashboard contact_us
    Route::group(['prefix' => '/contact_us'], function () {
        Route::get('', 'Dashboard\ContactUSController@index')->name('dashboard_contact_us.index');
        Route::get('/deleted', 'Dashboard\ContactUSController@deleted')->name('dashboard_contact_us.deleted');
        Route::get('/details', 'Dashboard\ContactUSController@details')->name('dashboard_contact_us.details');
        Route::post('/get_data', 'Dashboard\ContactUSController@get_data')->name('dashboard_contact_us.get_data');
    });

    // Dashboard hp_contact_us
    Route::group(['prefix' => '/hp_contact_us'], function () {
        Route::get('', 'Dashboard\HPContactUSController@index')->name('dashboard_hp_contact_us.index');
        Route::post('/post_data', 'Dashboard\HPContactUSController@post_data')->name('dashboard_hp_contact_us.post_data');
        Route::get('/get_data_by_id', 'Dashboard\HPContactUSController@get_data_by_id')->name('dashboard_hp_contact_us.get_data_by_id');
    });

    // Dashboard slider
    Route::group(['prefix' => '/slider'], function () {
        Route::get('', 'Dashboard\SliderController@index')->name('dashboard_slider.index');
        Route::get('/add_edit/{id?}', 'Dashboard\SliderController@add_edit')->name('dashboard_slider.add_edit');
        Route::get('/get_data_by_id', 'Dashboard\SliderController@get_data_by_id')->name('dashboard_slider.get_data_by_id');
        Route::get('/deleted', 'Dashboard\SliderController@deleted')->name('dashboard_slider.deleted');
        Route::post('/get_data', 'Dashboard\SliderController@get_data')->name('dashboard_slider.get_data');
        Route::post('/post_data', 'Dashboard\SliderController@post_data')->name('dashboard_slider.post_data');
    });

    // Dashboard slider_translate
    Route::group(['prefix' => '/slider_translate'], function () {
        Route::post('/post_data', 'Dashboard\SliderTranslateController@post_data')->name('dashboard_slider_translate.post_data');
        Route::get('/get_data', 'Dashboard\SliderTranslateController@get_data_by_id')->name('dashboard_slider_translate.get_data_by_id');
    });

    // Dashboard gallery
    Route::group(['prefix' => '/gallery'], function () {
        Route::get('', 'Dashboard\GalleryController@index')->name('dashboard_gallery.index');
        Route::get('/attachments', 'Dashboard\GalleryController@attachments')->name('dashboard_gallery.attachments');
        Route::get('/file_deleted/{id?}', 'Dashboard\GalleryController@file_deleted')->name('dashboard_gallery.file_deleted');
        Route::get('/file_deleted_by_id/{id?}', 'Dashboard\GalleryController@file_deleted_by_id')->name('dashboard_gallery.file_deleted_by_id');
        Route::post('/express_mail_file', 'Dashboard\GalleryController@express_mail_file')->name('dashboard_gallery.certificate_file');
    });


    // Dashboard about
    Route::group(['prefix' => '/about'], function () {
        Route::get('', 'Dashboard\AboutController@index')->name('dashboard_about.index');
        Route::post('/post_data', 'Dashboard\AboutController@post_data')->name('dashboard_about.post_data');
        Route::get('/get_data_by_id', 'Dashboard\AboutController@get_data_by_id')->name('dashboard_about.get_data_by_id');
    });

    // Dashboard about_translate
    Route::group(['prefix' => '/about_translate'], function () {
        Route::post('/post_data', 'Dashboard\AboutTranslateController@post_data')->name('dashboard_about_translate.post_data');
        Route::get('/get_data', 'Dashboard\AboutTranslateController@get_data_by_id')->name('dashboard_about_translate.get_data_by_id');
    });

    // Dashboard fact
    Route::group(['prefix' => '/fact'], function () {
        Route::get('', 'Dashboard\factController@index')->name('dashboard_fact.index');
        Route::post('/post_data', 'Dashboard\factController@post_data')->name('dashboard_fact.post_data');
        Route::get('/get_data_by_id', 'Dashboard\factController@get_data_by_id')->name('dashboard_fact.get_data_by_id');
    });

    // Dashboard fact_translate
    Route::group(['prefix' => '/fact_translate'], function () {
        Route::post('/post_data', 'Dashboard\factTranslateController@post_data')->name('dashboard_fact_translate.post_data');
        Route::get('/get_data', 'Dashboard\factTranslateController@get_data_by_id')->name('dashboard_fact_translate.get_data_by_id');
    });

    // Dashboard special
    Route::group(['prefix' => '/special'], function () {
        Route::get('', 'Dashboard\specialController@index')->name('dashboard_special.index');
        Route::post('/post_data', 'Dashboard\specialController@post_data')->name('dashboard_special.post_data');
        Route::get('/get_data_by_id', 'Dashboard\specialController@get_data_by_id')->name('dashboard_special.get_data_by_id');
    });

    // Dashboard special_translate
    Route::group(['prefix' => '/special_translate'], function () {
        Route::post('/post_data', 'Dashboard\specialTranslateController@post_data')->name('dashboard_special_translate.post_data');
        Route::get('/get_data', 'Dashboard\specialTranslateController@get_data_by_id')->name('dashboard_special_translate.get_data_by_id');
    });
    // Dashboard email_setting
    Route::group(['prefix' => '/email_setting'], function () {
        Route::get('', 'Dashboard\EmailSettingController@index')->name('dashboard_email_setting.index');
        Route::post('/post_data', 'Dashboard\EmailSettingController@post_data')->name('dashboard_email_setting.post_data');
        Route::get('/get_data_by_id', 'Dashboard\EmailSettingController@get_data_by_id')->name('dashboard_email_setting.get_data_by_id');
    });

    // Dashboard scripts
    Route::group(['prefix' => '/scripts'], function () {
        Route::get('', 'Dashboard\ScriptsSettingController@index')->name('dashboard_scripts.index');
        Route::post('/post_data', 'Dashboard\ScriptsSettingController@post_data')->name('dashboard_scripts.post_data');
        Route::get('/get_data_by_id', 'Dashboard\ScriptsSettingController@get_data_by_id')->name('dashboard_scripts.get_data_by_id');
    });

    // Dashboard adv_block
    Route::group(['prefix' => '/adv_block'], function () {
        Route::get('', 'Dashboard\AdvBlockController@index')->name('dashboard_adv_block.index');
        Route::post('/post_data', 'Dashboard\AdvBlockController@post_data')->name('dashboard_adv_block.post_data');
        Route::get('/get_data_by_id', 'Dashboard\AdvBlockController@get_data_by_id')->name('dashboard_adv_block.get_data_by_id');
    });

});
