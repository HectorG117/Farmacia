<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/Inicio','/inicio');

Route::view('/usuario/contacto','/informacion/contacto');


Route::view('/SobreNosotros','/empresa');

Route::view('/Blog','/SobreNosotros/blog');

Route::view('/Locales','/informacion/sucursales');

Route::view('/Servicios','servicios');

Route::view('/Pago','/Carrito/pago');

Route::view('/LoginHuella','/login_huella');

Route::view('/test','/test');

Route::view('/Login','/login');

Route::view('/Preguntas','/SobreNosotros/preguntas');

Route::view('/Contacto','/SobreNosotros/contacto');

Route::view('/Politicas','/SobreNosotros/politicas');

Route::view('/Sucursales','/SobreNosotros/sucursal');

Route::view('/Productos','/productos');

Route::view('/producto','/producto');

Route::view('/Promociones','/promociones');

Route::view('/Perfil','/perfil');