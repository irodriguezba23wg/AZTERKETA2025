<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UsersSeeder extends Seeder
{
    public function run()
    {

        if (!User::where('email', 'admin@example.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'abizena' => 'Admin',
                'dni' => '12345678A',
                'jaiotze_data' => '1990-01-01',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'), 
            ]);
        }
    }
}
