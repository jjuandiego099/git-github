<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "oli";
    $name="fabian Suarez";
    $age=rand(18,40);
    $islogin=true;
    $height=1.86;
    echo $name;


});
