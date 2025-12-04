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
                'imagen' => 'producto-aves.jpg',
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
                'imagen' => 'producto-bovinos.jpg',
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
                'imagen' => 'producto-concentrado.jpg',
                'beneficios' => [
                    'Alto contenido energético',
                    'Proteínas de alta calidad',
                    'Fácil digestión',
                    'Mejora la ganancia de peso',
                    'Reduce costos de alimentación'
                ]
            ],
            [
                'titulo' => 'Aditivo Natural "VerdePlus"',
                'descripcion' => 'Aditivo natural a base de extractos vegetales que mejora la digestibilidad y salud intestinal de los animales.',
                'categoria' => 'suplementos',
                'precio' => 'Consultar precio',
                'imagen' => 'producto-aditivo.jpg',
                'beneficios' => [
                    'Mejora la salud intestinal',
                    'Reduce el uso de antibióticos',
                    'Aumenta la absorción de nutrientes',
                    '100% natural y orgánico',
                    'Fortalece las defensas naturales'
                ]
            ],
            [
                'titulo' => 'Alimento Porcino "CerdoMax Pro"',
                'descripcion' => 'Alimento completo para cerdos en todas las etapas de crecimiento, formulado para máximo rendimiento productivo.',
                'categoria' => 'porcinos',
                'precio' => 'Consultar precio',
                'imagen' => 'producto-porcinos.jpg',
                'beneficios' => [
                    'Optimiza la conversión alimenticia',
                    'Mejora la calidad de la carne',
                    'Promueve crecimiento rápido y saludable',
                    'Reduce mortalidad',
                    'Fórmula científicamente balanceada'
                ]
            ],
            [
                'titulo' => 'Premezcla Vitamínica "VitalMix"',
                'descripcion' => 'Premezcla completa de vitaminas, minerales y aminoácidos esenciales para complementar cualquier dieta animal.',
                'categoria' => 'suplementos',
                'precio' => 'Consultar precio',
                'imagen' => 'producto-vitaminas.jpg',
                'beneficios' => [
                    'Complejo vitamínico completo',
                    'Previene enfermedades carenciales',
                    'Mejora el sistema inmunológico',
                    'Optimiza el metabolismo',
                    'Fácil aplicación y dosificación'
                ]
            ]
        ];

        return view('productos', compact('productos'));
    }
}
