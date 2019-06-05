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
            TarjetasTableSeeder::class,
            CarrerasTableSeeder::class,
            FacturacionesTableSeeder::class,
            DepartamentosTableSeeder::class,
            EvaluacionesTableSeeder::class,
            AsignaturasTableSeeder::class,
            CoordinacionesTableSeeder::class,
            FacultadesTableSeeder::class,
            HorariosTableSeeder::class,
            ProfesoresTableSeeder::class,
        ]);
    }
}