<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        //Users
        Permission::create([
        	'name' => 'Navegar en la lista usuarios',
        	'slug' => 'users.index',
       		'description' => 'Listado y navegación de usuarios',

        ]);
        Permission::create([
        	'name' => 'Mostrar usuario',
        	'slug' => 'users.show',
       		'description' => 'Ver detalles de usuario',

        ]);
        Permission::create([
        	'name' => 'Editar usuario',
        	'slug' => 'users.edit',
       		'description' => 'Edicion de usuario',

        ]);
        Permission::create([
        	'name' => 'Eliminar usuario',
        	'slug' => 'users.destroy',
       		'description' => 'Eliminar usuario',

        ]);

        //Roles
        //
       Permission::create([
        	'name' => 'Navegar en listado de roles',
        	'slug' => 'roles.index',
       		'description' => 'Ver listado y navegación de roles',

        ]);
        Permission::create([
        	'name' => 'Mostrar detalles de rol',
        	'slug' => 'roles.show',
       		'description' => 'Mostrar detalles de roles',

        ]);
       Permission::create([
        	'name' => 'Creación de rol',
        	'slug' => 'roles.create',
       		'description' => 'Creación de roles',

        ]);
       Permission::create([
        	'name' => 'Editar rol',
        	'slug' => 'roles.edit',
       		'description' => 'Editar roles',

        ]);
         Permission::create([
        	'name' => 'Eliminar rol',
        	'slug' => 'roles.destroy',
       		'description' => 'Eliminar rol',

        ]);

          //Productos
        //
        Permission::create([
        	'name' => 'Navegar en listado de productos',
        	'slug' => 'products.index',
       		'description' => 'Ver listado y navegación de productos',

        ]);
        Permission::create([
        	'name' => 'Mostrar detalles del producto',
        	'slug' => 'products.show',
       		'description' => 'Mostrar detalles del producto',

        ]);
       
        Permission::create([
        	'name' => 'Crear productos',
        	'slug' => 'products.create',
       		'description' => 'Creación de productos',

        ]);
         Permission::create([
        	'name' => 'Editar productos',
        	'slug' => 'products.edit',
       		'description' => 'Editar producto',

        ]);
          Permission::create([
        	'name' => 'Eliminar productos',
        	'slug' => 'products.destroy',
       		'description' => 'Eliminar productos',

        ]);

//Administracion de productos
//
          Permission::create([
          'name' => 'Navegar en listado de restaurantes',
          'slug' => 'restaurants.index',
          'description' => 'Ver lista y navega en restaurantes ',

        ]);
          Permission::create([
          'name' => 'Navegar en listado de empresa',
          'slug' => 'empresas.index',
          'description' => 'Ver lista y navega en pagina empresa ',

        ]);

          Permission::create([
          'name' => 'Navegar en listado de plus',
          'slug' => 'plus.index',
          'description' => 'Ver lista y navega en PLUS ',

        ]);

          Permission::create([
          'name' => 'Navegar en listado de recetas',
          'slug' => 'recetas.index',
          'description' => 'Ver lista y navega en recetas ',

        ]);

          Permission::create([
          'name' => 'Navegar en listado de unidades de medida',
          'slug' => 'unidades.index',
          'description' => 'Ver lista y navega en unidades de medida ',

        ]);

          Permission::create([
          'name' => 'Navegar en listado de canales de ventas',
          'slug' => 'canales.index',
          'description' => 'Ver lista y navega en canales de ventas ',

        ]);

          Permission::create([
          'name' => 'Navegar en listado de fechas de inventario',
          'slug' => 'fechas.index',
          'description' => 'Ver lista y navega en fechas de inventaris ',

        ]);


        
    }
}
