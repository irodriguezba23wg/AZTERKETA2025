<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
 public function run()
  {
    Role::create(['name' => 'admin']);
    Role::create(['name' => 'dentista']);
   }
}
