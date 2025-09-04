<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "oli";
    $name="fabian Suarez";
    $age=rand(18,40);
    $islogin=true;
    $height=1.86;
    $message="";
    echo $name;
    if($age>=18){
        $message .="eres mayor de edad";

    }else{
        $message .="No eres mayor de edad";

        
    }
    $message.="".($islogin? "Ya estas logueado":"No estas logueado");
    echo "<br>";
    echo $message;
    echo "<br>";
    


});
