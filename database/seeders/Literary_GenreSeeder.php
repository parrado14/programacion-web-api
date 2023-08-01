<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Literary_GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $literary_genre = [
            [
                'name' => 'El género narrativo',
                'description' => 'Es aquel que se caracteriza por el que el autor presentaba hechos legendarios, haciéndolos pasar por verdaderos o basándose en la verdad.',
            ],
            [
                'name' => 'El género lírico',
                'descrition' => 'Era el género por el cual el autor transmitía sus sentimientos, emociones o sensaciones por un objeto o una persona que le servía de inspiración.',
            ],
            [
                'name' => 'El género dramático',
                'description' => 'Este está fundamentalmente ligado al teatro. Corresponde a las representaciones teatrales.',
            ],
            [
                'name' => 'El género didáctico',
                'description' => 'En este género, la principal función es la enseñanza o la divulgación de ideas.',
            ],
        ];
    }
}
