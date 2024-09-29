<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Post::factory(20)->create();
        // User::create([
        //     'name' => 'Briant Jasper',
        //     'email' => 'briantjasper5@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhika.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        // Post::Create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum adipisci ullam maiores dicta quibusdam quae quo cupiditate praesentium consequuntur saepe iure suscipit animi, labore perferendis non, alias doloribus consequatur omnis perspiciatis et! Asperiores sit aspernatur neque non eligendi temporibus libero, dignissimos culpa nulla, explicabo suscipit ratione dicta quod adipisci minima possimus nisi, doloribus qui corrupti id ipsa? Nihil, minus. Placeat veniam nostrum ipsa beatae iste esse, perferendis sunt suscipit officia eos blanditiis expedita corrupti, architecto, nemo et deserunt velit animi quidem! Illum incidunt ea aspernatur maiores sed alias quam id labore nulla! Fuga a nulla, rem aliquid nemo culpa illum?',
        //     'category_id' => 1,
        //     'user_id' => 3
        // ]);

        // Post::Create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum adipisci ullam maiores dicta quibusdam quae quo cupiditate praesentium consequuntur saepe iure suscipit animi, labore perferendis non, alias doloribus consequatur omnis perspiciatis et! Asperiores sit aspernatur neque non eligendi temporibus libero, dignissimos culpa nulla, explicabo suscipit ratione dicta quod adipisci minima possimus nisi, doloribus qui corrupti id ipsa? Nihil, minus. Placeat veniam nostrum ipsa beatae iste esse, perferendis sunt suscipit officia eos blanditiis expedita corrupti, architecto, nemo et deserunt velit animi quidem! Illum incidunt ea aspernatur maiores sed alias quam id labore nulla! Fuga a nulla, rem aliquid nemo culpa illum?',
        //     'category_id' => 1,
        //     'user_id' => 4
        // ]);

        // Post::Create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum adipisci ullam maiores dicta quibusdam quae quo cupiditate praesentium consequuntur saepe iure suscipit animi, labore perferendis non, alias doloribus consequatur omnis perspiciatis et! Asperiores sit aspernatur neque non eligendi temporibus libero, dignissimos culpa nulla, explicabo suscipit ratione dicta quod adipisci minima possimus nisi, doloribus qui corrupti id ipsa? Nihil, minus. Placeat veniam nostrum ipsa beatae iste esse, perferendis sunt suscipit officia eos blanditiis expedita corrupti, architecto, nemo et deserunt velit animi quidem! Illum incidunt ea aspernatur maiores sed alias quam id labore nulla! Fuga a nulla, rem aliquid nemo culpa illum?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::Create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum adipisci ullam maiores dicta quibusdam quae quo cupiditate praesentium consequuntur saepe iure suscipit animi, labore perferendis non, alias doloribus consequatur omnis perspiciatis et! Asperiores sit aspernatur neque non eligendi temporibus libero, dignissimos culpa nulla, explicabo suscipit ratione dicta quod adipisci minima possimus nisi, doloribus qui corrupti id ipsa? Nihil, minus. Placeat veniam nostrum ipsa beatae iste esse, perferendis sunt suscipit officia eos blanditiis expedita corrupti, architecto, nemo et deserunt velit animi quidem! Illum incidunt ea aspernatur maiores sed alias quam id labore nulla! Fuga a nulla, rem aliquid nemo culpa illum?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);


    }
}
