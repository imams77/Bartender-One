<?php
    Route::get('bartender', function(){
        echo 'Hello bartenders!';

    });
    Route::get('add/{elem1}/{elem2}', 'Bartender\Connect\BartenderController@add');
?>