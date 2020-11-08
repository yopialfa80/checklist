<?php

 use App\Http\Controllers\Dashboard as Dashboard;
	
	Route::group(['middleware' => 'auth:sanctum', 'dashboard'], function() {
		
		// Ceklist Kendaraan
		Route::get('/dashboard', [Dashboard\Dashboard::class, 'index']);
		Route::get('/dashboard/ceklist-kendaraan', [Dashboard\CeklistKendaraan::class, 'index']);
		Route::get('/dashboard/ceklist-kendaraan/create', [Dashboard\CeklistKendaraan::class, 'create']);
		Route::get('/dashboard/ceklist-kendaraan/view/{id}', [Dashboard\CeklistKendaraan::class, 'view']);
		Route::get('/dashboard/ceklist-kendaraan/update/{id}', [Dashboard\CeklistKendaraan::class, 'update']);

		// Setting
		Route::get('/dashboard/setting', [Dashboard\Setting::class, 'index']);
		Route::get('/dashboard/ceklist-kendaraan/download', [Dashboard\CeklistKendaraan::class, 'downloadPdf']);
		
		// User
		Route::get('/admin/user/dashboard', [Dashboard\Users::class, 'index']);
		Route::get('/admin/user/dashboard/add', [Dashboard\Users::class, 'add']);
		Route::get('/admin/user/dashboard/view/{id}', [Dashboard\Users::class, 'view']);
		Route::get('/admin/user/dashboard/profile/{id}', [Dashboard\Users::class, 'profile']);
	});
	
	// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('dashboard');
	// })->name('dashboard');
	
// /* Route Admin */
// Route::prefix('admin/artikel')->group(function(){
	// Route::get('/', 'Admin\Artikel@index'); /* */
	// Route::get('/add/', 'Admin\Artikel@add');
	// Route::get('/view/{id}', 'Admin\Artikel@view');
	// Route::get('/update/{id}', 'Admin\Artikel@update');
// });
// /* end route Admin */

// /* Route Kategori */
// Route::prefix('admin/kategori')->group(function(){
	// Route::get('/', 'Admin\Kategori@index');
	// Route::get('/add/', 'Admin\Kategori@add');
	// Route::get('/view/{id}', 'Admin\Kategori@view');
	// Route::get('/update/{id}', 'Admin\Kategori@update'); 
// });
 

// /* end route kategori */

// /* Route Tags */
// Route::prefix('admin/tags')->group(function(){
	// Route::get('/', 'Admin\Tags@index');
	// Route::get('/add/', 'Admin\Tags@add');
	// Route::get('/view/{id}', 'Admin\Tags@view');
	// Route::get('/update/{id}', 'Admin\Tags@update'); 
// });
// /* End route tag */

// /* Route Pages*/
// Route::prefix('admin/pages')->group(function(){
	// Route::get('/', 'Admin\Pages@index');
	// Route::get('/add/', 'Admin\Pages@add');
	// Route::get('/update/{id}', 'Admin\Pages@update'); 
// });
// /* End route pages */

// /* Route Bannerads */
// Route::prefix('admin/bannerAds')->group(function(){
	// Route::get('/', 'Admin\Banner@index');
	// Route::get('/add/', 'Admin\Banner@add');
	// Route::get('/view/{id}', 'Admin\Banner@view');
	// Route::get('/update/{id}', 'Admin\Banner@update');
// });
// /* End route bannerAds */

// /* Route Headlines */
// Route::prefix('/admin/headline')->group(function(){
	// Route::get('/', 'Admin\Headline@index');
// });
// /* End Route Headlines */

// /* Route Headermenu */
// Route::prefix('admin/headerMenu')->group(function(){
	// Route::get('/', 'Admin\HeaderMenu@index');
	// Route::get('/add', 'Admin\HeaderMenu@add');
	// Route::get('/update/{id}', 'Admin\HeaderMenu@update');
// });
// /* End Route Headermenu */

// Route::prefix('admin/upload')->group(function(){
	// Route::get('/', 'Admin\Upload@index');
	// Route::get('/add', 'Admin\Upload@add');
	// Route::get('/update/{id}', 'Admin\Upload@update');
// });


// Route::get('/admin/setting', 'Admin\Setting@index');

// Route::get('/admin/styling', 'Admin\Styling@index');

// Route::prefix('/admin/user')->group(function(){
	// Route::get('/', 'Admin\Users@index');
	// Route::get('/add', 'Admin\Users@add');
	// Route::get('/view/{id}', 'Admin\Users@view');
	// Route::get('/profile/', 'Admin\Users@profile');
// });

// Route::get('/admin/media', 'Admin\Media@index');
