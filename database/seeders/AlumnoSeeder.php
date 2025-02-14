<?php

namespace Database\Seeders;

use App\Models\Idioma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idiomas = config("idiomas");
        $niveles=["Alto", "Medio","Bajo"];
        $titulos=[null,"A1", "A2", "B1", "B2", "C1", "C2"];

        Alumno::factory()->count(50)->create()->each(function (Alumno $alumno)
        use ($idiomas, $niveles, $titulos){

            $numero_idiomas_hablados= rand(0,4);
            if ($numero_idiomas_hablados >= 1) {

                shuffle($idiomas);

                $idiomas_hablados = array_slice($idiomas, 0, $numero_idiomas_hablados);
                foreach ($idiomas_hablados as $idioma_hablado) {
                    $idioma = new Idioma();
                    $idioma->alumno_id=$alumno->id;
                    $idioma->idioma=$idioma_hablado;
                    $idioma->nivel=$niveles[rand(0, sizeof($niveles)-1)];
                    $idioma->titulo=$titulos[rand(0, sizeof($titulos)-1)];
                    $idioma->save();
                } //end foreach

                }//end if

            });//end each
} //End run
} //End class
