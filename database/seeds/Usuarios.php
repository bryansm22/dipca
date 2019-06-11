<?php

use Illuminate\Database\Seeder;

class Usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'primer_nombre' => 'bryans',
            'usuario' => 'bryansm22',
            'contrasena' => bcrypt('salvador'),
            'administrador' => bcrypt('1'),
            'id_permisos' => bcrypt('1'),
        ]);
    }
}
