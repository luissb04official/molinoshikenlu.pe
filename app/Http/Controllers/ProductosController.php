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
                'descripcion' => 'Alimento balanceado especialmente formulado para aves de postura y engorde, con nutrientes esenciales para maximizar la productividad.',
                'categoria' => 'aves',
                'precio' => 'Consultar precio',
                'imagen' => 'Mezcla Integral.png',
                'beneficios' => [
                    'Mejora la calidad del huevo',
                    'Aumenta la tasa de conversión alimenticia',
                    'Fortalece el sistema inmunológico',
                    'Promueve el crecimiento saludable',
                    'Rico en vitaminas y minerales esenciales'
                ]
            ],
            [
                'titulo' => 'Suplemento Mineral Bovino "FortiGan"',
                'descripcion' => 'Suplemento mineral completo para ganado bovino, diseñado para complementar la dieta y mejorar el rendimiento productivo.',
                'categoria' => 'bovinos',
                'precio' => 'Consultar precio',
                'imagen' => 'Suplemento Mineral.png',
                'beneficios' => [
                    'Mejora la producción de leche',
                    'Fortalece huesos y articulaciones',
                    'Optimiza la reproducción',
                    'Previene deficiencias minerales',
                    'Aumenta la resistencia a enfermedades'
                ]
            ],
            [
                'titulo' => 'Concentrado Energético "Rendimax"',
                'descripcion' => 'Concentrado rico en energía y proteínas, ideal para animales en crecimiento y alta producción.',
                'categoria' => 'suplementos',
                'precio' => 'Consultar precio',
                'imagen' => 'Concentrado Energético.png',
                'beneficios' => [
                    'Alto contenido energético',
                    'Proteínas de alta calidad',
                    'Fácil digestión',
                    'Mejora la ganancia de peso',
                    'Reduce costos de alimentación'
                ]
            ],

        ];

        return view('productos', compact('productos'));
    }
}
