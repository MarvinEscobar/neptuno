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
    {
//Users
        Permission::create([
          'name' => 'Navegar en lista de usuarios',
          'slug' => 'users.index',
          'description' => 'Ver listado de usuarios',]);
        Permission::create([
          'name' => 'Mostrar detalles del usuario',
          'slug' => 'users.show',
          'description' => 'Ver detalles de usuario',]);
        Permission::create([
          'name' => 'Editar usuario',
          'slug' => 'users.edit',
          'description' => 'Editar usuario',]);
        Permission::create([
          'name' => 'Eliminar usuario',
          'slug' => 'users.destroy',
          'description' => 'Eliminar usuario',]);
//Roles
        Permission::create([
          'name' => 'Navegar en lista de roles',
          'slug' => 'roles.index',
          'description' => 'Ver listado de roles',]);
        Permission::create([
          'name' => 'Mostrar detalles de rol',
          'slug' => 'roles.show',
          'description' => 'Mostrar detalles del rol',]);
        Permission::create([
          'name' => 'Creación de rol',
          'slug' => 'roles.create',
          'description' => 'Creación de roles',]);
        Permission::create([
          'name' => 'Editar rol',
          'slug' => 'roles.edit',
          'description' => 'Editar rol',]);
        Permission::create([
          'name' => 'Eliminar rol',
          'slug' => 'roles.destroy',
          'description' => 'Eliminar rol',]);
//PRODUCTOS         
        Permission::create([
          'name' => 'Navegar en lista de productos',
          'slug' => 'products.index',
          'description' => 'Ver listado y navegación de productos',]);
        Permission::create([
          'name' => 'Mostrar detalles del producto',
          'slug' => 'products.show',
          'description' => 'Mostrar detalles del producto',]);       
        Permission::create([
          'name' => 'Crear productos',
          'slug' => 'products.create',
          'description' => 'Creación de productos',]);
        Permission::create([
          'name' => 'Editar productos',
          'slug' => 'products.edit',
          'description' => 'Editar producto',]);
        Permission::create([
          'name' => 'Eliminar productos',
          'slug' => 'products.destroy',
          'description' => 'Eliminar producto',]);

//MODULOS DE USUARIO(RESTAURANTES)
        permission::create([
          'name' => 'Navegar en listado entradas de suministros',
          'slug' => 'entradas.index',
          'description' => 'Ver listado de entradas',]);
        
        permission::create([
          'name' => 'Navegar en listado de importaciones',
          'slug' => 'impexternas.index',
          'description' => 'Ver listado de Importaciones externas',]);
        permission::create([
          'name' => 'Navegar en listado de salida de suministros',
          'slug' => 'salidas.index',
          'description' => 'Ver lista y navegación de salidas',]);
        permission::create([
          'name' => 'Navegar en listado de destruidos',
          'slug' => 'destruidos.index',
          'description' => 'Ver listado de destruidos',]);
        permission::create([
          'name' => 'Navegar listado de descargas',
          'slug' => 'descargas.index',
          'description' => 'Ver listado de descargas',]);        
        permission::create([
          'name' => 'Navegar en reportes',
          'slug' => 'reportes.index',
          'description' =>'Ver listado de reportes',]);
        permission::create([
          'name' => 'Navegar en Existencia final',
          'slug' => 'existentes.index',
          'description' =>'Ver listado de Existencias',]);
        permission::create([
          'name' => 'Navegar en Cuadratura',
          'slug' => 'cuadraturas.index',
          'description' =>'Ver listado de Cuadratura',]);
        permission::create([
          'name' => 'Navegar en cierre',
          'slug' => 'cierres.index',
          'description' =>'Ver listado de cierre',]);
        Permission::create([
          'name' => 'Navegar en listado de restaurantes',
          'slug' => 'restaurants.index',
          'description' => 'Ver listado de restaurantes ',]);
//Modulo Administrador
        Permission::create([
          'name' => 'Navegar en listado de empresa',
          'slug' => 'empresas.index',
          'description' => 'ver listado de empresas ',]);
        Permission::create([
          'name' => 'Navegar en listado de PLUS',
          'slug' => 'plus.index',
          'description' => 'ver listado de PLUS ', ]);
        Permission::create([
          'name' => 'Navegar en listado de recetas',
          'slug' => 'recetas.index',
          'description' => 'Ver lista de recetas ',]);        
        Permission::create([
          'name' => 'Navegar en listado de unidades de medidas',
          'slug' => 'unidades.index',
          'description' => 'Ver listado de unidades de medida ',]);
        Permission::create([
          'name' => 'Navegar en listado de canales de ventas',
          'slug' => 'canales.index',
          'description' => 'Ver lista de canales de ventas ',]);
        Permission::create([
          'name' => 'Navegar en listado de fechas de inventario',
          'slug' => 'fechas.index',
          'description' => 'Ver listado de fechas de inventario ',]);

       }
         
}
        



    

    

        
 

   


        
       
