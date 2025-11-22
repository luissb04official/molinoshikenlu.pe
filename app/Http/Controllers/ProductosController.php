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
                'descripcion' => 'Alimentos balanceados de alta calidad, especialmente formulados para satisfacer las necesidades nutricionales de diversos animales domésticos, de granja y silvestres.',
                'imagen' => null,
            ],
            [
                'titulo' => 'Suplemento Mineral Bovino "FortiGan"',
                'descripcion' => 'Alimentos balanceados de alta calidad, especialmente formulados para satisfacer las necesidades nutricionales de diversos animales domésticos, de granja y silvestres.',
                'imagen' => null,
            ],
            [
                'titulo' => 'Concentrado Energético "Rendimax"',
                'descripcion' => 'Alimentos balanceados de alta calidad, especialmente formulados para satisfacer las necesidades nutricionales de diversos animales domésticos, de granja y silvestres.',
                'imagen' => null,
            ],
            [
                'titulo' => 'Aditivo Natural "VerdePlus"',
                'descripcion' => 'Alimentos balanceados de alta calidad, especialmente formulados para satisfacer las necesidades nutricionales de diversos animales domésticos, de granja y silvestres.',
                'imagen' => null,
            ],
        ];

        return view('productos', compact('productos'));
    }
}
