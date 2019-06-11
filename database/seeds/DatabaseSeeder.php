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
        DB::table('usuario')->insert([
            'primer_nombre' => 'bryans',
            'primer_apellido' => 'marro',
            'usuario' => 'brsm22',
            'contrasena' => 'salva',
            'administrador' => '1',
            'id_permisos' => '1',
        ]);
    }
}
