<?php

use Illuminate\Support\Facades\Route;
Route::get('/contacto',function (){
    return view("formulario");
});
Route::get('/contacto/store',function (){
    print_r($_POST);
})->name('contacto.store');

Route::get('/', function () {
    echo "oli";
    $name = "fabian Suarez";
    $age = rand(18, 40);
    $islogin = true;
    $height = 1.86;
    $message = "";
    echo $name;
    if ($age >= 18) {
        $message .= "eres mayor de edad";
    } else {
        $message .= "No eres mayor de edad";
    }
    callback($age, function ($edad) {
        echo "hola tengo $edad de edad";
    });

    $message .= "" . ($islogin ? "Ya estas logueado" : "No estas logueado");
    echo "<br>";
    echo $message;
    echo "<br>";
    echo printUser($name);

    $lista = ["juan", "Fancho", 12];
    echo $lista[1];
    $listaProductos = [
        "camisa" => [
            "nombre" => 'camiisa',
            "talla" => '19'
        ],
        "pantalon" => [
            "nombre" => 'pantalon',
            "talla" => '34'
        ]
    ];
    $listaProductos["camisa"]["nombre"];
    for($i=0;$i<count($lista);$i++){
        echo $lista[$i];
    }
});
function printUser($name)
{
    return "El nombre del usuario es $name";
}
function callback($age, $callable)
{
    $callable($age);
}
