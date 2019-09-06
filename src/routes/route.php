<?php
Route::middleware(['web'])->namespace('Semdevops\Backpage\Controllers')->group(function(){
    Route::get('route/{route}', 'BackpageController@redirctRoute')->name('routeBack');
});
