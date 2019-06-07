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
            FacultadesTableSeeder::class,
            DepartamentosTableSeeder::class,
            CoordinadoresTableSeeder::class,
            CarrerasTableSeeder::class,

            //Entidades
            ProfesoresTableSeeder::class,
            AlumnoTableSeeder::class,
            AdministradoresTableSeeder::class,
            

            TarjetasTableSeeder::class,
            FacturacionesTableSeeder::class,
            AsignaturasTableSeeder::class,
            EvaluacionesTableSeeder::class,
            
            CoordinacionesTableSeeder::class,
            HorariosTableSeeder::class,
            MensajesTableSeeder::class,
            PlanesEstudioTableSeeder::class,
            //HistorialesAlumnoTableSeeder::class, Faltan configuraciones
            //HistorialesProfesorTableSeeder::class,
        ]);
    }
}