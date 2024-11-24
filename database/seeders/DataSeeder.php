<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuos = ['Home', 'Service', 'Aboutus', 'Numbers', 'Gallery', 'Work', 'Testimonials'];

        foreach ($menuos as $key => $value) {
            
            $newMenu = new Section();
            $newMenu->name = $value;
    
            $newMenu->title = 'saqlanmagan';
            $newMenu->text =  'saqlanmagan';
            $newMenu->link =  'saqlanmagan';
    
            $newMenu->save();

        }
    }
}
