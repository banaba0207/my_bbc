<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Post;

class DatabaseSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();  // 
        $this->call(PostsTableSeeder::class);
        Model::reguard();  // 
    }
}

class PostsTableSeeder extends Seeder{
    public function run(){
        $faker = Faker::create('ja_JP');
        for ($i = 1; $i <= 100; $i++) {
            for ($j = 0; $j < 3; $j++) {
                Post::create([
                    'title'       => $faker->sentence(),
                    'post_id'     => $i,
                    'res_id'      => $j,
                    'contributor' => $faker->name(),
                    'body'        => $faker->text,
                ]);
            }
        }
    }
}
