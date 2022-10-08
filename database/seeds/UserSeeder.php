<?php


use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Anisa Febriyanti',
            'level' => 'Admin',
            'Email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'remember_token' => Str::random(60)
        ]);
    }
}
