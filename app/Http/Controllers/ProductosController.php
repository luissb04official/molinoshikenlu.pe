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
                'titulo' => 'Alimento Integral para Pollos "Avícola Premium"',
                'descripcion' => 'Fórmula especializada para pollos de engorde y ponedoras, enriquecida con vitaminas A, D, E y complejo B. Contiene aminoácidos esenciales, calcio y fósforo para un desarrollo óptimo. Ideal para maximizar la conversión alimenticia y garantizar huevos de alta calidad.',
                'imagen' => null,
                'categoria' => 'Aves',
                'beneficios' => [
                    'Mejora la conversión alimenticia',
                    'Incrementa la producción de huevos',
                    'Fortalece el sistema inmunológico',
                    'Desarrollo muscular saludable'
                ],
                'presentaciones' => ['Sacos de 25kg', 'Sacos de 40kg'],
                'edad_recomendada' => 'Todas las edades'
            ],
            [
                'titulo' => 'Alimento Balanceado para Patos "AquaPlus"',
                'descripcion' => 'Nutrición completa para patos de cría y engorde. Fórmula rica en proteínas (18-20%) con suplementos minerales específicos. Incluye prebióticos naturales para una digestión saludable y plumaje brillante.',
                'imagen' => null,
                'categoria' => 'Aves Acuáticas',
                'beneficios' => [
                    'Plumaje resistente al agua',
                    'Crecimiento uniforme',
                    'Mejor digestibilidad',
                    'Resistencia a enfermedades'
                ],
                'presentaciones' => ['Sacos de 25kg', 'Sacos de 40kg'],
                'edad_recomendada' => 'A partir de 3 semanas'
            ],
            [
                'titulo' => 'Concentrado Bovino "GanaMax"',
                'descripcion' => 'Suplemento nutricional para ganado vacuno de carne y leche. Rico en energía metabolizable, proteína bypass y minerales quelados. Optimiza la producción láctea y el desarrollo muscular en bovinos de todas las edades.',
                'imagen' => null,
                'categoria' => 'Bovinos',
                'beneficios' => [
                    'Aumenta producción de leche',
                    'Mejora calidad de la carne',
                    'Incrementa fertilidad',
                    'Optimiza digestión ruminal'
                ],
                'presentaciones' => ['Sacos de 40kg', 'Sacos de 50kg'],
                'edad_recomendada' => 'Vacunos adultos'
            ],
            [
                'titulo' => 'Alimento para Cerdos "PorciMax"',
                'descripcion' => 'Fórmula balanceada para cerdos en crecimiento y acabado. Contiene lisina, metionina y treonina para un desarrollo muscular óptimo. Incluye probióticos para mejorar la salud intestinal y reducir el olor de excretas.',
                'imagen' => null,
                'categoria' => 'Porcinos',
                'beneficios' => [
                    'Crecimiento acelerado',
                    'Mejor conversión alimenticia',
                    'Carne magra de calidad',
                    'Salud intestinal óptima'
                ],
                'presentaciones' => ['Sacos de 25kg', 'Sacos de 40kg'],
                'edad_recomendada' => 'Desde destete hasta sacrificio'
            ],
            [
                'titulo' => 'Concentrado para Cuyes "CuyPlus Premium"',
                'descripcion' => 'Alimento especializado para cuyes reproductores y de engorde. Alto contenido en vitamina C, fibra digestible y proteína de alta calidad. Fórmula que promueve la reproducción y el crecimiento saludable.',
                'imagen' => null,
                'categoria' => 'Especies Menores',
                'beneficios' => [
                    'Rica en vitamina C natural',
                    'Prolificidad reproductiva',
                    'Crecimiento rápido',
                    'Pelaje brillante y suave'
                ],
                'presentaciones' => ['Sacos de 15kg', 'Sacos de 25kg'],
                'edad_recomendada' => 'Todas las etapas'
            ],
            [
                'titulo' => 'Alimento para Gallos de Pelea "Gladiador"',
                'descripcion' => 'Fórmula especial para gallos de combate y reproducción. Alta concentración de proteínas (20-22%), aminoácidos ramificados y antioxidantes naturales. Desarrolla masa muscular, resistencia y plumaje brillante.',
                'imagen' => null,
                'categoria' => 'Aves Especializadas',
                'beneficios' => [
                    'Desarrollo muscular superior',
                    'Mayor resistencia física',
                    'Plumaje vistoso',
                    'Mejor fertilidad'
                ],
                'presentaciones' => ['Sacos de 15kg', 'Sacos de 25kg'],
                'edad_recomendada' => 'Gallos adultos'
            ],
            [
                'titulo' => 'Suplemento Mineral "MultiMin"',
                'descripcion' => 'Premezcla vitamínica y mineral para todas las especies. Contiene macro y micro minerales esenciales, vitaminas liposolubles e hidrosolubles. Previene deficiencias nutricionales y mejora el rendimiento productivo.',
                'imagen' => null,
                'categoria' => 'Suplementos',
                'beneficios' => [
                    'Previene deficiencias',
                    'Fortalece huesos',
                    'Mejora sistema inmune',
                    'Optimiza metabolismo'
                ],
                'presentaciones' => ['Bolsas de 1kg', 'Bolsas de 5kg'],
                'edad_recomendada' => 'Universal'
            ],
            [
                'titulo' => 'Alimento para Reproductoras "Ferti-Ovo"',
                'descripcion' => 'Nutrición especializada para aves reproductoras. Balanceado con ácidos grasos omega-3, ácido fólico y minerales orgánicos. Optimiza la fertilidad, calidad del huevo fértil y desarrollo embrionario.',
                'imagen' => null,
                'categoria' => 'Reproducción',
                'beneficios' => [
                    'Mayor fertilidad',
                    'Huevos fértiles de calidad',
                    'Mejor eclosión',
                    'Crías más vigorosas'
                ],
                'presentaciones' => ['Sacos de 25kg', 'Sacos de 40kg'],
                'edad_recomendada' => 'Aves en reproducción'
            ]
        ];

        // Categorías para filtrado
        $categorias = [
            'Aves',
            'Aves Acuáticas',
            'Bovinos',
            'Porcinos',
            'Especies Menores',
            'Aves Especializadas',
            'Suplementos',
            'Reproducción'
        ];

        return view('productos', compact('productos', 'categorias'));
    }
}
