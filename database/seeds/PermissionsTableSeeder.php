<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Acceder a categorias',
            'slug' => 'categorias.index',
            'description' => 'Mostrar menu categorias'
        ]);
    }
}
