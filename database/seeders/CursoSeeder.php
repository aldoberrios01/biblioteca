<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;


class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $curso = new Curso();
        $curso->nombre = "Laravel";
        $curso->descripcion = "El Mejor Framework de php";
        $curso->categoria = "Desarollo web";
        $curso->save();

        $curso2 = new Curso();
        $curso2->nombre = "Laravel";
        $curso2->descripcion = "El Mejor Framework de php";
        $curso2->categoria = "Desarollo web";
        $curso2->save();

        $curso3 = new Curso();
        $curso3->nombre = "Laravel";
        $curso3->descripcion = "El Mejor Framework de php";
        $curso3->categoria = "Desarollo web";
        $curso3->save();
    }
}
