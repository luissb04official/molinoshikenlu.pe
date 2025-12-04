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
                'descripcion' => 'Fórmula especializada para aves de corral con vitaminas A, D, E y complejo B. Optimiza el crecimiento, mejora la conversión alimenticia y fortalece el sistema inmunológico. Ideal para pollos, patos y aves reproductoras.',
                'imagen' => null,
                'categoria' => 'Aves',
                'beneficios' => ['Crecimiento acelerado', 'Mejor conversión', 'Sistema inmune fuerte'],
                'presentacion' => 'Sacos de 25kg y 40kg'
            ],
            [
                'titulo' => 'Suplemento Mineral Bovino "FortiGan"',
                'descripcion' => 'Concentrado mineral rico en calcio, fósforo y microelementos esenciales para ganado vacuno. Mejora la producción láctea, fortalece huesos y optimiza la reproducción en bovinos de carne y leche.',
                'imagen' => null,
                'categoria' => 'Bovinos',
                'beneficios' => ['Mayor producción láctea', 'Huesos más fuertes', 'Mejor fertilidad'],
                'presentacion' => 'Sacos de 40kg y 50kg'
            ],
            [
                'titulo' => 'Concentrado Energético "Rendimax"',
                'descripcion' => 'Alimento altamente energético con carbohidratos complejos y grasas de calidad. Diseñado para animales en crecimiento y alta producción. Aumenta el rendimiento y mejora la eficiencia alimentaria.',
                'imagen' => null,
                'categoria' => 'Energético',
                'beneficios' => ['Alta energía', 'Mejor rendimiento', 'Eficiencia alimentaria'],
                'presentacion' => 'Sacos de 25kg y 40kg'
            ],
            [
                'titulo' => 'Aditivo Natural "VerdePlus"',
                'descripcion' => 'Suplemento 100% natural con extractos herbales, probióticos y prebióticos. Mejora la digestión, fortalece la flora intestinal y aumenta la absorción de nutrientes en todas las especies.',
                'imagen' => null,
                'categoria' => 'Suplementos',
                'beneficios' => ['Digestión mejorada', 'Flora intestinal saludable', 'Mayor absorción'],
                'presentacion' => 'Bolsas de 1kg y 5kg'
            ],
            [
                'titulo' => 'Alimento para Cuyes "CuyPlus"',
                'descripcion' => 'Fórmula especial rica en vitamina C y fibra digestible para cuyes reproductores y de engorde. Promueve el crecimiento rápido, pelaje brillante y alta prolificidad reproductiva.',
                'imagen' => null,
                'categoria' => 'Especies Menores',
                'beneficios' => ['Rico en vitamina C', 'Crecimiento rápido', 'Pelaje brillante'],
                'presentacion' => 'Sacos de 15kg y 25kg'
            ],
            [
                'titulo' => 'Concentrado Porcino "CerdoMax"',
                'descripcion' => 'Alimento balanceado para cerdos en todas las etapas. Con lisina, metionina y probióticos para un desarrollo muscular óptimo, mejor conversión alimenticia y carne magra de calidad.',
                'imagen' => null,
                'categoria' => 'Porcinos',
                'beneficios' => ['Desarrollo muscular', 'Carne magra', 'Conversión eficiente'],
                'presentacion' => 'Sacos de 25kg y 40kg'
            ],
        ];

        $categorias = ['Aves', 'Bovinos', 'Porcinos', 'Especies Menores', 'Energético', 'Suplementos'];

        return view('productos', compact('productos', 'categorias'));
    }
}
