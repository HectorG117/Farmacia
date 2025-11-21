<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function mostrar($id)
    {
        // Simulación temporal de productos
        $productos = [
            1 => ['nombre' => 'Paracetamol', 'precio' => 25, 'imagen' => 'paracetamol.jpg'],
            2 => ['nombre' => 'Ibuprofeno', 'precio' => 35, 'imagen' => 'ibuprofeno.jpg'],
            3 => ['nombre' => 'Aspirina', 'precio' => 30, 'imagen' => 'aspirina.jpg'],
        ];

        if (!isset($productos[$id])) {
            abort(404);
        }

        return view('producto', [
            'producto' => $productos[$id]
        ]);
    }
}
