<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\Models\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'title' => 'test title 1',
            'content' => 'test content 1'
        ]);
        DB::table('messages')->insert([
            'title' => 'test title 2',
            'content' => 'test content 2'
        ]);
        DB::table('messages')->insert([
            'title' => 'test title 3',
            'content' => 'test content 3'
        ]);
        
    }
}
