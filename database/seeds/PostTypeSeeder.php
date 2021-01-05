<?php

use Illuminate\Database\Seeder;
use App\PostType;

class PostTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostType::create([
            "id" => 1,
            "name" => "Default",
            "description" => "Default Post Type",
        ]);
    }
}
