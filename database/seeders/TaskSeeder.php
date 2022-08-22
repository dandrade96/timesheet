<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'title' => 'Task Seeder',
            'description' => 'Task Seeder example',
            'date' => '2022-08-22',
            'hour_start' => '18:50:00',
            'hour_finish' => '19:03:00',
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
