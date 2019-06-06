<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            RegionsTableSeeder::class,
            ComunasTableSeeder::class,
            AdministradoresTableSeeder::class,
            CoordinadoresTableSeeder::class,
            FacturacionesTableSeeder::class,
            FacultadesTableSeeder::class,
            DepartamentosTableSeeder::class,
            CarrerasTableSeeder::class,
            EvaluacionesTableSeeder::class,
            AsignaturasTableSeeder::class,
            ProfesoresTableSeeder::class,
            CoordinacionesTableSeeder::class,
            HorariosTableSeeder::class,
            ProfesoresTableSeeder::class,
            PlanesEstudioTableSeeder::class,
            PrerequisitosTableSeeder::class,
            AlumnosTableSeeder::class,
            TarjetasTableSeeder::class,
            AlumnoCarreraTableSeeder::class,
            PlanesEstudioAsignaturasTableSeeder::class,
        ]);
    }
}