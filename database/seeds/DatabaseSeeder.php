<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Article;

class DatabaseSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();  // 
        $this->call(ArticlesTableSeeder::class);
        Model::reguard();  // 
    }
}

class ArticlesTableSeeder extends Seeder{
    public function run(){
        DB::table('articles')->delete();
        $faker = Faker::create('ja_JP');
        for ($i = 0; $i < 10; $i++) {
            Article::create([
                'title' => $faker->name(),
                'body' => $faker->address(),
//                'body' => $i,
                'published_at' => Carbon::today()
            ]);
        }
    }
}
