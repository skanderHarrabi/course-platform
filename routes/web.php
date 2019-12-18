<?php
Route::get('/formation/single/{slug}', [
        'uses'=>'FrontEndController@formationsingle',
        'as'=>'formation.single'
    ]);
Route::get('/frontregistre', [
    'uses'=>'FrontEndController@showregister',
    'as'=>'front.register'
]);
Route::post('/frontregister', [
    'uses'=>'FrontEndController@register',
    'as'=>'front.registerpost'
]);
Route::get('/frontlogin', [
    'uses'=>'FrontEndController@showlogin',
    'as'=>'front.login',
    'middleware'=>'guest'
]);
Route::post('/frontlogin', [
    'uses'=>'FrontEndController@login',
    'as'=>'front.login',
    'middleware'=>'guest'
]);
Route::get('/', [
    'uses'=>'FrontEndController@index',
    'as'=>'index'
]);
Route::get('/profile', [
    'uses'=>'FrontEndController@profile',
    'as'=>'profileFront'
])->middleware('profile');
Route::post('/logout',[
   'uses'=>'FrontEndController@logout',
   'as'=>'logout'
]);
Route::get('/allcource', [
    'uses'=>'FrontEndController@allcource',
    'as'=>'allcource'
]);
Route::get('/results',function(){
    $formation=\App\Formation::where('title','like','%'.request('s').'%')->get();
   return view('all_cources')
                            ->with('title',\App\Setting::first()->site_name)
                            ->with('settings',\App\Setting::first())
                            ->with('categories',\App\Categorie::all()) 
                            ->with('formateurs',\App\User::where('role_id',2)->take(3)->get())
                            ->with('formations',\App\Formation::orderBy('created_at','desc')->take(3)->get())
                            ->with('tags',\App\Tag::all())
                            ->with('cources',$formation)
                            ->with('teachers',\App\User::where('role_id',2)->take(5)->get());

});
Route::get('/result/{id}', [
    'uses'=>'FrontEndController@categorieResult',
    'as'=>'result.cat'
]);
Route::get('/resultall',function(){
    $category= \App\Categorie::where('name','like',request('ofcourse_category'))->first();
    $formation=\App\Formation::where('category_id','like',$category->id)->get();
   return view('all_cources')
                            ->with('title',\App\Setting::first()->site_name)
                            ->with('settings',\App\Setting::first())
                            ->with('categories',\App\Categorie::all()) 
                            ->with('formateurs',\App\User::where('role_id',2)->take(3)->get())
                            ->with('formations',\App\Formation::orderBy('created_at','desc')->take(3)->get())
                            ->with('tags',\App\Tag::all())
                            ->with('cources',$formation)
                            ->with('teachers',\App\User::where('role_id',2)->take(5)->get());

});
Route::get('/categorie/{id}', [
    'uses'=>'FrontEndController@category',
    'as'=>'category'
]);
Route::resource('comment', 'CommentController',['only'=>['update','destroy']]);
Route::post('comment/creat/{formation}','CommentController@storeComment')->name('formationcomment.store')->middleware('comment');
Route::post('replay/creat/{comment}','CommentController@ReplayComment')->name('replaycomment.store')->middleware('comment');

Route::get('/add-to-cart/{id}',[
    'uses'=>'Admin\FormationsController@getAddToCart',
    'as'=>'formation.addToCart'
]);
Route::get('reduce/{$id}','Admin\FormationsController@getReduceByOne')->name('reduce');

Route::get('/remove/{$id}',[
    'uses'=>'Admin\FormationsController@getRemoveItem',
    'as'=>'formation.remove'
]);
Route::get('/shopping-cart',[
    'uses'=>'Admin\FormationsController@getCart',
    'as'=>'formation.shoppingCart'
]);
Route::get('/checkout-cart',[
    'uses'=>'Admin\FormationsController@getCheckout',
    'as'=>'checkout',
    
])->middleware('Checkout');
Route::post('/checkout-cart',[
    'uses'=>'Admin\FormationsController@postCheckout',
    'as'=>'checkout'
]);

Route::get('/mycources',[
    'uses'=>'FrontEndController@getcources',
    'as'=>'mycources'
]);
Route::get('/general',[
    'uses'=>'FrontEndController@generalSetting',
    'as'=>'general'
]);
Route::group(['middleware'=>'Checkout'],function(){


            Route::get('/message',[
                'uses'=>'FrontEndController@message',
                'as'=>'message'
            ]);
            Route::post('/discussion',[
                'uses'=>'FrontEndController@discussionStore',
                'as'=>'discussion.store'
            ]);
            Route::get('/discussion/{id}',[
                'uses'=>'FrontEndController@discussionshow',
                'as'=>'discussionshow'
            ]);
            Route::get('/forum',[
                'uses'=>'forumsController@index',
                'as'=>'forum'
            ]);
            Route::post('/discussion/replay/{id}',[
                'uses'=>'FrontEndController@replay',
                'as'=>'discussion.replay'
            ]);
            Route::get('/reply/like/{id}',[
                'uses'=>'RepliesController@like',
                'as'=>'replay.like'
            ]);
            Route::get('/reply/unlike/{id}',[
                'uses'=>'RepliesController@unlike',
                'as'=>'replay.unlike'
            ]);
            Route::get('/formation/{slug}',[
                'uses'=>'forumsController@formation',
                'as'=>'formation.descussion'
            ]);
            Route::get('/markasread',function(){
                auth()->user()->unreadNotifications->markAsRead();
            });

});
Route::get('/password',[
    'uses'=>'FrontEndController@passSetting',
    'as'=>'pass'
]);
Route::post('/profile/update',[
    'uses'=>'FrontEndController@updateProfile',
    'as'=>'profile.update'
   ]);
   Route::get('/contact',[
    'uses'=>'FrontEndController@contact',
    'as'=>'contact'
]);

   Route::group(['middleware' => ['Formateur']], function () {
    Route::get('/formateurprofile', [
        'uses'=>'FrontEndController@formateurprofile',
        'as'=>'formateurpofile'
    ]);
    Route::get('/formateur-general',[
        'uses'=>'FrontEndController@formateurgeneralSetting',
        'as'=>'formateur.general'
    ]);
    Route::get('/formateur-pass',[
        'uses'=>'FrontEndController@formateurpassSetting',
        'as'=>'formateur.pass'
    ]);
    Route::get('/formateur/calendar',[
        'uses'=>'FrontEndController@calendar',
        'as'=>'formateur.calendar'
    ]);
    
   });
Route::get('/Mydiscussion',[
    'uses'=>'forumsController@mydiscussions',
    'as'=>'Mydiscussion'
]);

       



    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login')->name('auth.login');
    Route::post('logout', 'Auth\LoginController@logout')->name('auth.logout');
    
    // Change Password Routes...
    Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
    Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');
    
    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

// Authentication Routes...


    Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
        
    Route::get('/home', 'HomeController@index');
    Route::get('/calendar', 'Admin\SystemCalendarController@index'); 
  
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_actions', 'Admin\UserActionsController');
    Route::resource('formations', 'Admin\FormationsController');
    Route::post('formations_mass_destroy', ['uses' => 'Admin\FormationsController@massDestroy', 'as' => 'formations.mass_destroy']);
    Route::post('formations_restore/{id}', ['uses' => 'Admin\FormationsController@restore', 'as' => 'formations.restore']);
    Route::delete('formations_perma_del/{id}', ['uses' => 'Admin\FormationsController@perma_del', 'as' => 'formations.perma_del']);
    Route::resource('categories', 'Admin\CategoriesController');
    Route::post('categories_mass_destroy', ['uses' => 'Admin\CategoriesController@massDestroy', 'as' => 'categories.mass_destroy']);
    Route::post('categories_restore/{id}', ['uses' => 'Admin\CategoriesController@restore', 'as' => 'categories.restore']);
    Route::delete('categories_perma_del/{id}', ['uses' => 'Admin\CategoriesController@perma_del', 'as' => 'categories.perma_del']);
    Route::resource('tags', 'Admin\TagsController');
    Route::post('tags_mass_destroy', ['uses' => 'Admin\TagsController@massDestroy', 'as' => 'tags.mass_destroy']);
    Route::post('tags_restore/{id}', ['uses' => 'Admin\TagsController@restore', 'as' => 'tags.restore']);
    Route::delete('tags_perma_del/{id}', ['uses' => 'Admin\TagsController@perma_del', 'as' => 'tags.perma_del']);
    Route::resource('places', 'Admin\PlacesController');
    Route::post('places_mass_destroy', ['uses' => 'Admin\PlacesController@massDestroy', 'as' => 'places.mass_destroy']);
    Route::post('places_restore/{id}', ['uses' => 'Admin\PlacesController@restore', 'as' => 'places.restore']);
    Route::delete('places_perma_del/{id}', ['uses' => 'Admin\PlacesController@perma_del', 'as' => 'places.perma_del']);
    Route::get('user/profile',[
        'uses'=>'ProfilesController@index',
        'as'=>'user.profile'
    ]);
    Route::post('user/profile/update',[
     'uses'=>'ProfilesController@update',
     'as'=>'user.profile.update'
    ]);
    Route::get('/settings',[
        'uses'=>'SettingsController@index',
        'as'=>'settings.settings'
    ]);
    Route::post('/settings/update',[
        'uses'=>'SettingsController@update',
        'as'=>'settings.update'
    ]);
   Route::get('/test','Api\V1\FormationsController@index');
});
