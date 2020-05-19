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
      $this->call(CompanySeeder::class);
      $this->call(UserSeeder::class);
      $this->call(ClientSeeder::class);
      $this->call(InventorySeeder::class);
      $this->call(RoleSeeder::class);
      $this->call(PermissionSeeder::class);
      $this->call(ModelRolesSeeder::class);
      $this->call(RolePermissionsSeeder::class);
   }
}
