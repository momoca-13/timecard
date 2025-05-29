<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '管理 次郎',
                'email' => 'zirou.k@coachtech.com',
                'role' => 1,
                'password' => bcrypt('coachtech1'),
            ],
            [
                'name' => '西 玲奈',
                'email' => 'reina.n@coachtech.com',
                'role' => 0,
                'password' => bcrypt('coachtech1'),
            ],
            [
                'name' => '山田 太郎',
                'email' => 'taro.y@coachtech.com',
                'role' => 0,
                'password' => bcrypt('coachtech2'),
            ],
            [
                'name' => '増田 一世',
                'email' => 'issei.m@coachtech.com',
                'role' => 0,
                'password' => bcrypt('coachtech3'),
            ],
            [
                'name' => '山本 敬吉',
                'email' => 'keikichi.y@coachtech.com',
                'role' => 0,
                'password' => bcrypt('coachtech4'),
            ],
            [
                'name' => '秋田 朋美',
                'email' => 'tomomi.a@coachtech.com',
                'role' => 0,
                'password' => bcrypt('coachtech5'),
            ],       
            [
                'name' => '中西 教夫',
                'email' => 'norio.n@coachtech.com',
                'role' => 0,
                'password' => bcrypt('coachtech6'),
            ],
        ]);
    }
}
