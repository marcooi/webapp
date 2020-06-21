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
     //return view('welcome');
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function () {

    Route::get('/getcompany', 'CompanyController@searchCompany')->name('getcompany');
    Route::get('/getvendor', 'CompanyController@searchVendor')->name('getvendor');
    Route::get('/customer', 'CompanyController@getCustomer')->name('getcustomer');
    Route::get('/getcompanybyid/{id}', 'CompanyController@searchCompanyById')->name('getcompanybyid');
    Route::get('/getpurchase/{id}', 'PurchaseController@getPurchase')->name('getpurchasebyid');
    Route::get('/getpurchasedetail/{id}', 'PurchaseController@getPurchaseDetail')->name('getpurchasedetailbyid');
    Route::get('/getpurchaseproduct/{id}', 'PurchaseController@getPurchaseProduct')->name('getpurchaseproduct');
    Route::get('/getproduct', 'ProductController@searchProduct')->name('getproduct');
    Route::get('/getproductid/{id}', 'ProductController@searchProductById');
    Route::get('/getinventory', 'ProductController@searchInventory')->name('getinventory');
    Route::get('/getinventory/{id}', 'ProductController@searchInventoryById')->name('getinventorybyid');
    Route::get('/getcompanyshipping/{id}', 'AddressController@getOwnerShippingAddress');
    Route::get('/printorder/{id}', 'PurchaseController@printorder')->name('purchase.printorder');    
    Route::get('/purchases/confirm/{id}', 'PurchaseController@confirm')->name('purchase.confirm');
    Route::get('/sales/confirm/{id}', 'SaleController@confirm')->name('sale.confirm');
    Route::get('/quotations/confirm/{id}', 'QuotationController@confirm')->name('quotation.confirm');
    Route::get('/employee/all', 'EmployeeController@searchEmployee')->name('employee.all');
    Route::get('/address/{id}', 'AddressController@searchShippingAddress')->name('address.all');
    Route::get('/sale/printorder/{id}', 'SaleController@printorder')->name('sale.printorder');
    Route::get('/sale/printquotation/{id}', 'QuotationController@print')->name('sale.printquotation');

    Route::get('/getsale/{id}', 'SaleController@getSale')->name('getsale');  
   
    Route::get('/getcoa', 'ChartOfAccountController@searchCoa')->name('getcoa');
    // Route::get('/journaltype', 'JournalController@journalType')->name('journaltype');


    Route::resource('setting/roles', 'RoleController');
    Route::resource('setting/users', 'UserController');
    Route::resource('setting/permissions', 'PermissionController');
    Route::resource('master/products', 'ProductController');
    Route::resource('master/chart-of-accounts', 'ChartOfAccountController');
    Route::resource('master/companies', 'CompanyController');
    Route::resource('master/addresses', 'AddressController');    
    Route::resource('purchases', 'PurchaseController');
    Route::resource('purchase/receipts', 'ReceiptController');
    Route::resource('sales', 'SaleController');
    Route::resource('sale/quotations','QuotationController');

    Route::resource('journals', 'JournalController');

});


