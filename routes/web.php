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

Route::get('/', function () {
    return view('landing');
})->name('landing');

// Route::get('/login', function() {
//     return view('landing.login');
// })->name('login');

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/login', function() {
//     return view('auth.login');
// });

Auth::routes();

// Route::get('/sign_up', 'SignUpController@index')->name('sign_up');
Route::group(['middleware' => 'auth'], function () {
    // Route::get('/login', 'LoginController@login')->name('login');
    Route::get('/mainmenu', 'MainMenuController@index')->name('mainmenu');
    Route::get('/match', 'MatchController@index')->name('match');   
    Route::get('/matches', 'MatchesController@index')->name('matches');
    // Route::get('/team', 'TeamUserController@index')->name('team-participants');
    // Route::get('/news', 'NewsUserController@index')->name('news');
    Route::get('/store', 'StoreController@index')->name('store');
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::get('/mainmenu1', 'MatchPageController@index')->name('matchpage');
    Route::get('/matchlive', 'MatchPage2Controller@index')->name('matchpage2');
    Route::get('/mainmenu3', 'ComingSoonController@index')->name('comingsoon');
    Route::get('/bigetron', 'PlayerProfileController@index')->name('player');
    Route::get('/coach', 'CoachController@index')->name('coach');
    Route::get('/bigetron2', 'PlayerUserController@index')->name('player-user');
    Route::get('/store/product/{id}', 'StoreController@product')->name('product');
    Route::get('/category/lifestyle', 'CategoryController@index')->name('lifestyle');
    Route::get('/category/esential', 'EsentialController@index')->name('esential');
    Route::get('/category/limited', 'LimitedController@index')->name('limited');
    Route::get('/category/performance', 'PerformanceController@index')->name('performance');
    Route::get('/category/highlight', 'HighlightController@index')->name('highlight');
    Route::get('/category/championship', 'ChampionshipController@index')->name('championship');
    Route::get('/category/hotnews', 'HotnewsController@index')->name('hotnews');
    Route::get('/category/advertisement', 'AdvertisementController@index')->name('advertisement');
    Route::post('/store/product/{id}', 'StoreController@order');
    // Route::post('/store/product/{id}', 'StoreController@preview');
    Route::get('/cart', 'CartController@index')->name('cart');
    Route::delete('cart-delete/{id}', 'CartController@delete')->name('cart-destroy');
    Route::get('konfirmasi-checkout', 'StoreController@konfirmasi');
    Route::get('/store4', 'CheckoutController@index')->name('checkout');
    Route::get('/find', 'StoreController@find')->name('find');
    // Route::get('/review', 'StoreController@review')->name('review');
    Route::get('history', 'HistoryController@index');
    Route::get('history/{id}', 'HistoryController@detail');
    Route::get('/profile', 'ProfileUserController@index')->name('profile');
    Route::post('/profile', 'ProfileEditController@update');
    Route::get('/profile2', 'ProfileEditController@index')->name('edit-profile');
    Route::get('/about', 'AboutController@index')->name('about');
    Route::get('contact-us', 'ContactController@index');
    Route::post('contact-us', 'ContactController@store')->name('contact.us.store');
    Route::get('/searchresult', 'SearchResultController@index')->name('searchresult');
    // Route::get('/news_all', 'AllController@index')->name('all');





    Route::get('/player-home','backend\PlayerController@index');

    //STORE
    Route::get('/kategori', 'backend\KategoriController@index')->name('kategori');
    Route::get('/kategori-create', 'backend\KategoriController@create')->name('kategori-create');
    Route::post('/kategori-insert', 'backend\KategoriController@store')->name('kategori-insert');

    // news frontend
    Route::get('/news_all', 'AllController@index')->name('all');
    Route::get('/findnews', 'AllController@findnews')->name('findnews');
    Route::get('/news_show/{id}', 'AllController@show')->name('news-show');

 

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/coach-detail/{id}', 'MainmenuController@show')->name('coach-detail');
    // Route::post('/news-update/{id}', 'AllController@update')->name('news-update');

    // Team Frontend
    // Route::get('/about-team', 'TeamUserController@index')->name('teams');


    //Player Frontend
    Route::get('/team', 'Frontend\TeamController@index')->name('team-participants');
    Route::get('/about-team/{id}', 'Frontend\TeamController@show')->name('team-detail');
    Route::get('/player-detail/{id}', 'Frontend\PlayerDetailController@show')->name('player-participants');
    Route::get('/player-about/{id}', 'Frontend\PlayerDetailController@show')->name('player-about');
    
    // Route::get('/team-player', 'TeamDetailController@index')->name('teams');
    Route::get('/team-player/{id}', 'TeamUserController@show')->name('player-detail'); 

    Route::get('/comments', 'CreateCommentController@index');
    Route::post('/comments', 'CreateCommentController@store')->name('comments.store'); 

                

});



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['ceklevel:admin']],function () {

     //dashboar
     Route::get('/dashboard','Backend\DashboardController@index')->name('dashboard');
    
    ///myadmin 
    //team1
    Route::get('/team-home', 'Backend\TeamController@index')->name('team-home');
    Route::get('/team-insert', 'Backend\TeamController@create')->name('team-insert');
    Route::post('/team-store', 'Backend\TeamController@store')->name('team-store');
    
    Route::get('/team-edit/{id}', 'Backend\TeamController@edit')->name('team-edit');
    Route::get('/team-delete/{id}', 'Backend\TeamController@destroy')->name('team-destroy');
    Route::post('/team-update/{id}', 'Backend\TeamController@update')->name('team-update');
    Route::get('/search','SearchController@search');
    
    //team2
    Route::get('/team-home2', 'Backend\Myteam2Controller@index')->name('team-home2');
    Route::get('/team-insert2', 'Backend\Myteam2Controller@create')->name('team-insert2');
    Route::post('/team-store2', 'Backend\Myteam2Controller@store')->name('team-store2');
    
    Route::get('/team-edit2/{id}', 'Backend\Myteam2Controller@edit')->name('team-edit2');
    Route::get('/team-delete2/{id}', 'Backend\Myteam2Controller@destroy')->name('team-destroy2');
    Route::post('/team-update2/{id}', 'Backend\Myteam2Controller@update')->name('team-update2');
    Route::get('/search','SearchController@search');
    //player
    // Route::get('/player-home', 'PlayerController@index')->name('player-home');
    Route::get('/player-home','Backend\PlayerController@index')->name('player-home');
    Route::get('/player-create', 'Backend\PlayerController@create')->name('player-create');
    Route::post('/player-store', 'Backend\PlayerController@store')->name('player-store');
    Route::get('/player-delete/{id}', 'Backend\PlayerController@destroy')->name('player-destroy');
    Route::get('/player-edit/{id}', 'Backend\PlayerController@edit')->name('player-edit');
    Route::post('/player-update/{id}', 'Backend\PlayerController@update')->name('player-update');


    //coach
    Route::get('/coach-home','Backend\CoachController@index')->name('coach-home');
    Route::get('/coach-create', 'Backend\CoachController@create')->name('coach-create');
    Route::post('/coach-store', 'Backend\CoachController@store')->name('coach-store');
    Route::get('/coach-delete/{id}', 'Backend\CoachController@destroy')->name('coach-destroy');
    Route::get('/coach-edit/{id}', 'Backend\CoachController@edit')->name('coach-edit');
    Route::post('/coach-update/{id}', 'Backend\CoachController@update')->name('coach-update');
    

    // news
    Route::get('/news-home', 'Backend\NewsController@index')->name('news-home');
    Route::get('/news-insert', 'Backend\NewsController@create')->name('news-insert');
    Route::post('/news-store', 'Backend\NewsController@store')->name('news-store');
    Route::get('/news-delete/{id}', 'Backend\NewsController@destroy')->name('news-destroy');
    Route::get('/news-edit/{id}', 'Backend\NewsController@edit')->name('news-edit');
    Route::post('/news-update/{id}', 'Backend\NewsController@update')->name('news-update');
    
    
    // profile
    Route::get('/profile-home', 'Backend\ProfileController@index')->name('profile-home');
    Route::get('/profile-insert', 'Backend\ProfileController@create')->name('profile-insert');
    Route::post('/profile-store', 'Backend\ProfileController@store')->name('profile-store');
    Route::get('/profile-delete/{id}', 'Backend\ProfileController@destroy')->name('profile-destroy');
    Route::get('/profile-edit/{id}', 'Backend\ProfileController@edit')->name('profile-edit');
    Route::post('/profile-update/{id}', 'Backend\ProfileController@update')->name('profile-update');


    // product
    Route::get('/product-table', 'Backend\StoreController@index')->name('product-table');
    Route::get('/product-detail', 'Backend\StoreController@create')->name('product-detail');
    Route::post('/product-insert', 'Backend\StoreController@store')->name('product-insert');
    Route::get('/product-edit/{id}', 'Backend\StoreController@edit')->name('product-edit');
    Route::post('/product-update/{id}', 'Backend\StoreController@update')->name('product-update');
    Route::get('/product-delete/{id}', 'Backend\StoreController@destroy')->name('product-destroy');


    //tournament
    Route::get('/tournament-table', 'Backend\TournamentController@index')->name('tournament-table');
    Route::get('/tournament-detail', 'Backend\TournamentController@create')->name('tournament-detail');
    Route::post('/tournament-insert', 'Backend\TournamentController@store')->name('tournament-insert');
    Route::get('/tournament-edit/{id}', 'Backend\TournamentController@edit')->name('tournament-edit');
    Route::post('/tournament-update/{id}', 'Backend\TournamentController@update')->name('tournament-update');
    Route::get('/tournament-delete/{id}', 'Backend\TournamentController@destroy')->name('tournament-destroy');


    //store-kategori
    // Route::get('/kategori-home', 'Backend\KategoriController@index')->name('kategori-home');    
    // Route::get('/kategori-create', 'Backend\KategoriController@create')->name('kategori-create');    
    // Route::post('/kategori-insert', 'Backend\KategoriController@store')->name('kategori-insert');    
    // Route::get('/kategori-edit/{id}', 'Backend\KategoriController@edit')->name('kategori-edit');    
    // Route::post('/kategori-update/{id}', 'Backend\KategoriController@update')->name('kategori-update');    
    // Route::delete('/kategori-destroy/{id}', 'Backend\KategoriController@destroy')->name('kategori-destroy');    

    //store-category
    Route::get('/category', 'Backend\CategoryController@index')->name('category-table');
    Route::get('/category-create', 'Backend\CategoryController@create')->name('category-create');    
    Route::post('/category-insert', 'Backend\CategoryController@show')->name('category-insert');
    Route::get('/category-edit/{id}', 'Backend\CategoryController@edit')->name('category-edit');    
    Route::post('/category-update/{id}', 'Backend\CategoryController@update')->name('category-update');
    Route::get('/category-delete/{id}', 'Backend\CategoryController@destroy')->name('category-destroy');

    // order
    Route::get('/order', 'Backend\HistoryController@index')->name('order-table');

    // match

    Route::get('/match-home', 'Backend\MatchController@index')->name('match-home');
    Route::get('/match-create', 'Backend\MatchController@create')->name('match-create');
    Route::post('/match-insert', 'Backend\MatchController@store')->name('match-insert');
    Route::get('/match-edit/{id}', 'Backend\MatchController@edit')->name('match-edit');
    Route::post('/match-update/{id}', 'Backend\MatchController@update')->name('match-update');
    Route::get('/match-delete/{id}', 'Backend\MatchController@destroy')->name('match-destroy');


    //coba
    Route::get('/match-admin', 'MatchController@admin')->name('admin-home');
    Route::get('/admin-create', 'MatchController@create')->name('admin-create');
    Route::post('/admin-insert', 'MatchController@store')->name('admin-insert');
    Route::get('/admin-edit/{id}', 'MatchController@edit')->name('admin-edit');
    Route::post('/admin-update/{id}', 'MatchController@update')->name('admin-update');
    Route::get('/admin-delete/{id}', 'MatchController@destroy')->name('admin-destroy');

    //store-produk
    Route::get('/produk-home', 'Backend\ProdukController@index')->name('produk-home');    
    Route::get('/produk-create', 'Backend\ProdukController@create')->name('produk-create');    
    Route::post('/produk-insert', 'Backend\ProdukController@store')->name('produk-insert');    
    Route::get('/produk-edit/{id}', 'Backend\ProdukController@edit')->name('produk-edit');    
    Route::post('/produk-update/{id}', 'Backend\ProdukController@update')->name('produk-update');    
    Route::get('/produk-show/{id}', 'Backend\ProdukController@show')->name('produk-show');
    Route::post('/produk-destroy/{id}', 'Backend\ProdukController@destroy')->name('produk-destroy');
    
      // upload image produk
    Route::post('/produkimage', 'Backend\ProdukController@uploadimage');
    // hapus image produk
    Route::delete('/produkimage/{id}', 'Backend\ProdukController@deleteimage');
    
    
    //Customer
    Route::get('/customer-home', 'Backend\CustomerController@index')->name('customer-home');    
    Route::get('/customer-edit', 'Backend\CustomerController@edit')->name('customer-edit');
    
    //Transaksi
    Route::get('/transaksi-home', 'Backend\TransaksiController@index')->name('transaksi-home');    
    Route::get('/transaksi-edit', 'Backend\TransaksiController@edit')->name('transaksi-edit');
    Route::get('/transaksi-show', 'Backend\TransaksiController@show')->name('transaksi-show');

    //profile

    Route::get('pengguna', 'Backend\PenggunaController@index');

    Route::get('setting', 'Backend\PenggunaController@setting');


    //laporan
    Route::get('laporan', 'Backend\LaporanController@index');
    // proses laporan
    Route::get('proses-laporan', 'Backend\LaporanController@proses');

    //image
    Route::get('/gambar', 'Backend\ImageController@index');
    Route::post('/gambar', 'Backend\ImageController@store');
    Route::delete('/gambar/{id}', 'Backend\ImageController@destroy');
    Route::post('/gambar-kategori', 'Backend\KategoriController@uploadimage');
    Route::delete('/gambar-kategori/{id}', 'Backend\KategoriController@deleteimage')->name('kategori-destroy');





});


   



   

