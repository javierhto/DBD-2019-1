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
            AlumnosTableSeeder::class,
            AdministradoresTableSeeder::class,
            

            TarjetasTableSeeder::class,
            FacturacionesTableSeeder::class,
            AsignaturasTableSeeder::class,
            EvaluacionesTableSeeder::class,
            PrerequisitosTableSeeder::class,
            DocumentosTableSeeder::class,
            
            CoordinacionesTableSeeder::class,
            HorariosTableSeeder::class,
            MensajesTableSeeder::class,
            PlanesEstudioTableSeeder::class,
            RegistrosAccionTableSeeder::class,
            HistorialesAlumnoTableSeeder::class,
            HistorialesProfesorTableSeeder::class,
            AlumnoCarreraTableSeeder::class,
            PlanesEstudioAsignaturasTableSeeder::class,
            CoordinacionesProfesoresTableSeeder::class,
            CoordinacionesHorariosTableSeeder::class,
        ]);
    }
}