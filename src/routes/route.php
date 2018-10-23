<?php
Route::middleware(['web','auth'])->namespace('Semdevops\Backpage\Controllers')->group(function(){
    Route::get('route/{route}', 'BackpageController@redirctRoute')->name('routeBack');
});
