<?php


use Illuminate\Database\Seeder;


class TaskSeeder extends Seeder
{
    public function run()
    {
        factory(App\Task::class , 10)->create();
    }
}
