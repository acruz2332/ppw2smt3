<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PostsSeeder extends Seeder
{
    private $_post = [
        ["title" => "Seeder 1", "description" => "Deskripsi Seeder 1"],
        ["title" => "Seeder 2", "description" => "Deskripsi Seeder 2"],
        ["title" => "Seeder 3", "description" => "Deskripsi Seeder 3"],
        ["title" => "Seeder 4", "description" => "Deskripsi Seeder 4"],
        ["title" => "Seeder 5", "description" => "Deskripsi Seeder 5"],
        ["title" => "Seeder 6", "description" => "Deskripsi Seeder 6"],
        ["title" => "Seeder 7", "description" => "Deskripsi Seeder 7"],
        ["title" => "Seeder 8", "description" => "Deskripsi Seeder 8"],
        ["title" => "Seeder 9", "description" => "Deskripsi Seeder 9"],
        ["title" => "Seeder 10", "description" => "Deskripsi Seeder 10"],
        ["title" => "Seeder 11", "description" => "Deskripsi Seeder 11"],
        ["title" => "Seeder 12", "description" => "Deskripsi Seeder 12"],
        ["title" => "Seeder 13", "description" => "Deskripsi Seeder 13"],
        ["title" => "Seeder 14", "description" => "Deskripsi Seeder 14"],
        ["title" => "Seeder 15", "description" => "Deskripsi Seeder 15"],
        ["title" => "Seeder 16", "description" => "Deskripsi Seeder 16"],
        ["title" => "Seeder 17", "description" => "Deskripsi Seeder 17"],
        ["title" => "Seeder 18", "description" => "Deskripsi Seeder 18"],
        ["title" => "Seeder 19", "description" => "Deskripsi Seeder 19"],
    ];

    public function run()
    {
        $data = [];
        foreach ($this->_post as $post){
            $data[] = [
                'title' => $post['title'],
                'description' => $post['description']
            ];
        }
        DB::table('posts')->insert($data);
    }
}
