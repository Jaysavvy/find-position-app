<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create tags
        $tags = Tag::factory()->count(3)->create();

        // Create jobs and attach tags
        Job::factory()
            ->count(20)
            ->state(new Sequence(
                ['featured' => false, 'schedule' => 'full-time'],
                ['featured' => true, 'schedule' => 'part-time']
            ))
            ->hasAttached($tags)
            ->create();
    }
}
