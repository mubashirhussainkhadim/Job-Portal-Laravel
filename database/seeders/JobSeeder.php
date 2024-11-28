<?php

namespace Database\Seeders;
use App\Models\Tag;
use App\Models\Job;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag = Tag::factory(3)->create();
        Job::factory(20)->hasAttached($tag)->create(new Sequence(
            [
                'feature' => false,
                'schedule' => 'Full Time'
            ],
            [
                'feature' => true,
                'schedule' => 'Part Time'
            ]
        ));
    }
}
