<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use app\Http\Controllers\AdddetailsController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\ViewdetailsController;
use App\Models\description;
use Illuminate\Support\Facades\Route;

route::get('/', [HomepageController::class, 'home'])->name('home');
Route::get('/linkstorage', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'storage linked!';
});

route::get('/login', [AuthController::class, 'loginDisplay'])->name('loginDisplay');
route::post('/login', [AuthController::class, 'login'])->name('logging');



// route::get('/register', [AuthController::class, 'registerDisplay'])->name('registerDisplay');
// route::post('/register', [AuthController::class, 'registering'])->name('registering');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['isUser'])->group(function () {
        route::get('/dashboard', [AuthController::class, 'homes'])->name('dashboard');
        route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        route::get('/back', [TestController::class, 'back'])->name('back');

        //READ LINK ROUTES.................................................................

        // Route::get('/addreadlink', 'App\Http\Controllers\AdddetailsController@readlink')->name('readlink');//get
        // Route::post('/postreadlink', 'App\Http\Controllers\AdddetailsController@postreadlink')->name('postreadlink');//post
        route::get('/view/readinglinks', [ViewdetailsController::class, 'viewRead'])->name('viewRead');//viewList
        // route::get('/readinglink/delete/{id}', [ViewdetailsController::class, 'deleteRead'])->name('deleteRead');//delete....
        // route::get('/edit/readlink/{id}', [ViewdetailsController::class, 'editReadLink'])->name('editReadLink');//edit..........
        // route::post('/update/readlink/{id}', [ViewdetailsController::class, 'updateReadLink'])->name('updateReadLink');//update......




        //VIDEO LINK ROUTES.................................................................

        route::get('/addvideolink', 'App\Http\Controllers\AdddetailsController@videolink')->name('videolink');//get
        route::post('/postvideolink', 'App\Http\Controllers\AdddetailsController@postvideolink')->name('postvideolink');//post
        route::get('/view/videolinks', [ViewdetailsController::class, 'viewVideo'])->name('viewVideo');//viewList
        route::get('/videolink/delete/{id}', [ViewdetailsController::class, 'deleteVideo'])->name('deleteVideo');//delete....
        route::get('/edit-videolink', [ViewdetailsController::class, 'editVideoLink'])->name('editVideoLink');//edit..........
        route::post('/update/videolink/{id}', [ViewdetailsController::class, 'updateVideoLink'])->name('updateVideoLink');//update......
        route::get('/editVideo', [ViewdetailsController::class, 'editVideo'])->name('editVideo');



        //COUNTRY ROUTES.................................................................

        route::get('/addcountry', 'App\Http\Controllers\AdddetailsController@addcountry')->name('country');//get
        route::post('/postcountry', 'App\Http\Controllers\AdddetailsController@postcountry')->name('postcountry');//post
        route::get('/view/country', [ViewdetailsController::class, 'viewCountry'])->name('viewCountry');//viewList
        route::get('/country/delete/{id}', [ViewdetailsController::class, 'deleteCountry'])->name('deleteCountry');//delete....
        route::get('/edit-country', [ViewdetailsController::class, 'editCountry'])->name('editCountry');//edit.....
        route::post('/update/country/{id}', [ViewdetailsController::class, 'updateCountry'])->name('updateCountry');//update...




        //DESCRITION ROUTES.................................................................

        route::get('/adddescription', 'App\Http\Controllers\AdddetailsController@adddescription')->name('description');//get/view
        route::get('/change/video', [ViewdetailsController::class, 'changeVideo'])->name('changeVideo');
        route::post('/submit/video', [ViewdetailsController::class, 'submitVideo'])->name('submitVideo');
        route::post('/postdecription', 'App\Http\Controllers\AdddetailsController@postdescription')->name('postdescription');//post
        route::get('/viewDetails', [ViewdetailsController::class, 'viewDetails'])->name('viewDetails'); //viewList
        route::get('/deleteDetails/{d_id}', [ViewdetailsController::class, 'deleteDetails'])->name('deleteDetails'); //delete
        route::get('/edit-description', [ViewdetailsController::class, 'editDescription'])->name('editDescription');//edit.....
        route::post('/update/description/{id}', [ViewdetailsController::class, 'updateDescription'])->name('updateDescription');//update...


        //Test page..............................................
        // test description.............
        // route::get('/reading description/page', [TestController::class, 'showTestPage'])->name('showTestPage');
        route::get('/view all/reading description/', [TestController::class, 'viewAllDescription'])->name('viewAllDescription');///
        route::get('/add/reading description/', [TestController::class, 'addTestDescription'])->name('addTestDescription');
        route::post('/post/reading description/', [TestController::class, 'postTestDescription'])->name('postTestDescription');//
        route::get('/edit/reading-description', [TestController::class, 'editTestDescription'])->name('editTestDescription');//
        route::post('/update/reading description/', [TestController::class, 'updateTestDescription'])->name('updateTestDescription');//
        route::get('/delete/reading description/', [TestController::class, 'deleteTestDescription'])->name('deleteTestDescription');//

        //test images..................................................
        route::get('/view image', [TestController::class, 'viewImagePage'])->name('viewImagePage');
        route::get('/readin description-addImage', [TestController::class, 'addImagePage'])->name('addImagePage');
        route::post('/reading description/post image/page/', [TestController::class, 'postImagePage'])->name('postImagePage');
        route::get('/reading description/delete image/page/', [TestController::class, 'deleteImage'])->name('deletePhoto');

        // route::get('/reading description/add image/page/pte', [TestController::class, 'addPteImagePage'])->name('addPteImagePage');
        // route::post('/reading description/post image/page/pte', [TestController::class, 'postPteImagePage'])->name('postPteImagePage');
        // route::get('/reading description/delete image/page/pte/{id}', [TestController::class, 'deletePteImage'])->name('deletePtePhoto');

        route::get('/welcome/pages', [PageController::class, 'addPage'])->name('addPages');
        route::post('/welcome/pages/', [PageController::class, 'postPage'])->name('postPages');
        route::get('/view/welcomepages/', [PageController::class, 'viewPage'])->name('viewpages');
        route::get('/edit/welcomepages/', [PageController::class, 'editPage'])->name('editpages');
        route::post('/update/welcomepages/', [PageController::class, 'updatePage'])->name('updatepages');
        route::get('/delete/welcomepages/', [PageController::class, 'deletePage'])->name('deletepages');


        route::get('/indexadd', [PageController::class, 'addIndex'])->name('addIndex');
        route::post('/indexpost', [PageController::class, 'postIndex'])->name('postIndex');
        route::get('/view/indexpages', [PageController::class, 'indexPage'])->name('indexPages');
        route::get('/edit/indexpages/', [PageController::class, 'editIndex'])->name('editIndex');
        route::post('/update/indexpages/', [PageController::class, 'updateIndex'])->name('updateIndex');
        route::get('/delete/indexpages/', [PageController::class, 'deleteIndex'])->name('deleteIndex');


        route::get('/logo', [LogoController::class, 'addLogo'])->name('addLogo');
        route::post('/postLogo', [LogoController::class, 'postLogo'])->name('postLogo');
        route::get('/viewLogo', [LogoController::class, 'viewLogo'])->name('viewLogo');
        route::get('/deleteLogo', [LogoController::class, 'deleteLogo'])->name('deleteLogo');
        route::get('/editLogo', [LogoController::class, 'editLogo'])->name('editLogo');
        route::post('/updateLogo', [LogoController::class, 'updateLogo'])->name('updateLogo');

        route::get('/tokenGenerate', [TokenController::class, 'tokenGenerate'])->name('tokenGenerate');

    });
});