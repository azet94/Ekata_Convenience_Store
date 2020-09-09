<?php

use Illuminate\Support\Facades\Auth;
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

//Register Route


//

/*Route::view('/usersignin', 'admin.usersignin');*/
Route::post('/registerUser', 'User\UserController@registerUser');
Route::post('/registerAdmin', 'User\UserController@registerAdmin');

//Logout
Route::get('/logout', function () {
    Auth::logout();
    return view('auth.login');
});
//About Us
Route::get('/aboutus', function () {
    return view('website/aboutus');
});
//Services
Route::get('/services', 'Website\ProductController@service');
/*Route::get('/products', function () {
    return view('website/products');
});*/
//Product Page Url
Route::get('/products','Website\ProductController@showProducts');
//Sub Category Page Url
Route::get('/category/{id}', [
    "uses" => 'Website\ProductController@showCategory',
    "as" => 'category']);
//Category Page Url
Route::get('/maincategory/{id}', [
    "uses" => 'Website\ProductController@showMainCategory',
    "as" => 'maincategory']);
//SingleProduct Page Url
Route::get('/singleproduct/{id}', [
    'uses' => 'Website\ProductController@SingleProductPage',
    'as' => 'singleproduct']);

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::view('/adminregister', 'auth.adminregistration');
    Route::view('admin/services/', 'admin.services.service');
    Route::get('/allAdmins','Admin\DashboardController@fetchAdmin');
    Route::get('admin/dashboard', 'Admin\DashboardController@dashboradData');
    Route::view('user/users', 'admin.user.users');
    Route::view('customer/customers', 'admin.customer.customers');
    /*Route::view('admin/users', 'admin.users');*/
    Route::view('admin/userregistration', 'admin.userregistration');
    Route::view('admin/usersignin', 'admin.usersignin');
//Setup.....
    Route::view('admin/setup/index', 'admin.setup.index');
    Route::view('admin/setup/brands', 'admin.setup.brands');
    Route::view('admin/setup/tags', 'admin.setup.tags');
//Product
Route::view('admin/addproduct/index', 'admin.add_product.index');
Route::view('admin/addproduct/products', 'admin.add_product.products');
Route::view('admin/addproduct/discount', 'admin.add_product.adddiscount');
//Order
    Route::view('admin/order/orderdetails', 'admin.order.orderdetails');
//Banner Image
    Route::view('admin/banner/bannerimage', 'admin.banner_image.bannerimage');
//Website Info
    Route::view('admin/websiteupdate/websiteinfo', 'admin.website_update.websiteInfo');
Route::view('admin/websiteupdate/enquiries', 'admin.website_update.enquiries');
Route::view('admin/websiteupdate/customersfeedback', 'admin.website_update.customersFeedback');
Route::view('admin/websiteupdate/reviewscarousel', 'admin.website_update.reviewsCarousel');
//Services
Route::view('admin/services/', 'admin.services.service');

    Route::view('admin/order/shippingdetails', 'admin.order.shippingDetails');
    Route::view('admin/cart/allusercartdetails', 'admin.cart.allusercartdetails');

});
//Services



Auth::routes();


Route::get('/billings', function () {
    return view('website/billings');
});


//User Routes
Route::group(['middleware' => ['auth', 'user']], function () {
    Route::view('user/userdashboard', 'User.userdashboard');
    Route::view('user/userprofile','User.userprofile');


    Route::get('/billings', function () {
        //make controller and paste the function
        if (!Auth::user()) {
            redirect('/login');
        }
        return view('website/billings');
    });

    Route::get('payment-success', 'Website\PaymentController@paymentsuccess')->name('payment.success');


    Route::get('cancel', function () {
        dd('cancel');
    })->name('payment.cancel');


});
Auth::routes();

//ContactPage
Route::get('/contact','Website\WebsiteDetailController@showDetails');

//Website Page Url
Route::get('/', 'Website\ProductController@index');

//Save Enquiry
Route::post('/saveEnquiry','Website\EnquiryController@saveEnquiry');

//Save Feedback
Route::post('/saveFeedback','Website\FeedbackController@saveFeedback');

//Save User/Admin Register
Route::post('/registerUser','User\UserController@registeruser');
Route::post('/registerAdmin','User\UserController@registerAdmin');
