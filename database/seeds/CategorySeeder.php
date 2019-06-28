<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $judul = [
          'Email',
          'SMS',
          'Whatasapp'
        ];

        foreach ($judul as $value) {
            Category::create([
                'judul' => $value
            ]);
        }
    }
}
