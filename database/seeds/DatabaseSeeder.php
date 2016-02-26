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
        DB::table('articles')->delete();
        $faker = Faker::create('ja_JP');
        for ($i = 0; $i < 100; $i++) {
            Post::create([
                'title' => $faker->sentence(),
                'contributor' => $faker->name(),
                'body' => $faker->text,
//                'published_at' => Carbon::today()
            ]);
        }
    }
}
