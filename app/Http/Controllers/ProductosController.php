<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = [
            [
                'titulo' => 'Mezcla Integral Avícola "Aurea"',
                'descripcion' => 'Fórmula equilibrada pensada para un desarrollo uniforme y plumaje saludable en todas las etapas productivas.',
                'imagen' => null,
                'precio' => 'S/ 45.00',
            ],
            [
                'titulo' => 'Suplemento Mineral Bovino "FortiGan"',
                'descripcion' => 'Balance mineral diario que favorece la ganancia de peso y la salud ósea del ganado.',
                'imagen' => null,
                'precio' => 'S/ 120.00',
            ],
            [
                'titulo' => 'Concentrado Energético "Rendimax"',
                'descripcion' => 'Alta densidad energética para mejorar la conversión alimenticia y el rendimiento en sistemas intensivos.',
                'imagen' => null,
                'precio' => 'S/ 75.00',
            ],
            [
                'titulo' => 'Aditivo Natural "VerdePlus"',
                'descripcion' => 'Mezcla de extractos botánicos que favorecen la digestión y el bienestar general del animal.',
                'imagen' => null,
                'precio' => 'S/ 55.00',
            ],
        ];

        return view('productos', compact('productos'));
    }
}
