<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ekitaldi; 
use Carbon\Carbon;

class EkitaldiSeeder extends Seeder
{
    public function run()
    {
        Ekitaldi::create([ 
            'izena' => 'Kongresu Nazionala',
            'data' => Carbon::parse('2025-05-10'),
            'azalpena' => 'Odontologiaren kongresu nazionala.',
        ]);
    }
}
