<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $author = [
            [
                'name' => 'Carl Sagan',
                'description' => 'Carl Edward Sagan fue un astrónomo, astrofísico, cosmólogo, astrobiólogo, escritor y principalmente un reconocido divulgador científico estadounidense. Inicialmente fue profesor asociado de la Universidad de Harvard y posteriormente profesor principal de la Universidad de Cornell',
            ],
            [
                'name' => 'Jorge Bucay',
                'description' => 'Jorge Bucay es un médico, psicodramaturgo, terapeuta gestáltico y escritor argentino. Nació en el barrio porteño de Floresta.', 
            ],
            [
                'name' => 'Rober Fisher',
                'description' => 'Robert Fisher, conocido en el medio del espectáculo como Bob Fisher, fue un autor estadounidense de origen judío, autor de guiones de comedia en el cine, de obras de teatro, musicales y de libros de motivación y autoayuda.', 
            ],
            [
                'name' => 'Isaac Asimov',
                'description' => 'Isaac Asimov fue un escritor y profesor de bioquímica en la facultad de medicina de la universidad de Boston de origen judío ruso, naturalizado estadounidense, conocido por ser un prolífico autor de obras de ciencia ficción, historia y divulgación científica', 
            ],
            [
                'name' => 'Thomas H. Cormen',
                'description' => 'Thomas H. Cormen es catedrático de informática en la universidad Dartmouth. Nació en Estados Unidos. Su mayor contribución hasta la fecha ha sido la copublicación junto con Charles Leiserson, Ron Rivest y Clifford Stein del libro Introducción a los algoritmos', 
            ],
            [
                'name' => 'David Mitchell',
                'description' => 'David Mitchell es un novelista inglés. Mitchell nació en Southport, Merseyside, en Inglaterra. Estudió en la universidad de Kent donde se tituló en Literatura inglesa y americana, y realizó un máster en Literatura comparada.', 
            ],
            [
                'name' => 'Miguel de Cervantes',
                'description' => 'El manco de Lepanto nos brindó “el mejor trabajo literario jamás escrito”, según el prestigioso Norwegian Book Club. “Don Quijote”, que se ha convertido en el libro más editado y traducido de la historia después de la Biblia, es la primera obra de caballerías que desmitificó la tradición caballeresca', 
            ],
            [
                'name' => 'Julio Verne',
                'description' => 'Uno de los padres de la ciencia ficción, célebre por sus novelas de aventuras, Verne contó con diversas adaptaciones de sus obras. La primera de ellas fue “20.000 leguas de viaje submarino”', 
            ],
            [
                'name' => 'Oscar Wilde',
                'description' => 'El ingenioso dramaturgo y novelista irlandés, autor de obras tan reconocidas como “El retrato de Dorian Gray”, “La importancia de llamarse Ernesto” o “El abanico de Lady Windermer”, se convirtió en una de las mayores personalidades de su tiempo, y se enfrentó a la hipocresía, la estupidez y los tabúes de la sociedad británica', 
            ],
            [
                'name' => 'William Shakespeare',
                'description' => 'William Shakespeare ​ fue un dramaturgo, poeta y actor inglés. Conocido en ocasiones como el Bardo de Avon, se le considera el escritor más importante en lengua inglesa y uno de los más célebres de la literatura universal.​', 
            ]
        ];

        DB::table('authors')->insert($author);
    }
}
