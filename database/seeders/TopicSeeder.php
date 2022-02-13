<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create([
            'name' => 'Programming',
        ]);
        Topic::create([
            'name' => 'Frntend',
        ]);
        Topic::create([
            'name' => 'Backend',
        ]);
        Topic::create([
            'name' => 'Datbases',
        ]);
        Topic::create([
            'name' => 'Laravel',
        ]);
    }
}
