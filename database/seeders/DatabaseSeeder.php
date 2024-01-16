<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Event::factory(10)->create();

        // Event::factory()->create([
        //     'title' => 'Tall Stack Unveiled',
        //     'speaker' => 'Logan Craft',
        //     'description' => 'Learn about the new Tall Stack!',
        //     'slides' => 'https://slides.com/logancraftweb/tall-stack',
        //     'event_date' => now(),
        // ]);

        Event::factory()->create([
            'title' => 'Solid Principles',
            'speaker' => 'Rob Shelnutt',
            'speaker_image' => 'https://ca.slack-edge.com/T035JA133-UUM16G6BX-1432c92fb7d8-512',
            'description' => 'Solid Principles Explained',
            'slides' => 'https://slides.com/logancraftweb/tall-stack',
            'event_date' => now()->subDays(100),
        ]);

        Event::factory()->create([
            'title' => 'Vertex AI',
            'speaker' => 'Emmett Deen',
            'speaker_image' => 'https://ca.slack-edge.com/T035JA133-UJTJ7GGQM-f5f78d681ec2-512',
            'description' => 'Vertex AI in Depth',
            'slides' => 'https://slides.com/emmett/vertex',
            'event_date' => now()->subDays(360),
        ]);

        Event::factory()->create([
            'title' => 'Functional Programming',
            'speaker' => 'Wade Beavers',
            'speaker_image' => 'https://ca.slack-edge.com/T035JA133-U01FMJV0MK5-089129062df3-512',
            'cover_image' => 'https://media.licdn.com/dms/image/D5622AQFNGLldMVhJiQ/feedshare-shrink_800/0/1697820759967?e=1704326400&v=beta&t=PglHYQwmn3r5X6EO3NJ_aZ1d6YePsGtcTcwuu4Qu7-A',
            'description' => 'Functional Programming - Feature Flags',
            'slides' => 'https://slides.com/beavers/feature',
            'event_date' => now()->subMonth(),
        ]);
    }
}
