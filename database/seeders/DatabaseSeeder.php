<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent sollicitudin purus eu gravida tempus. Orci varius natoque penatibus
            et magnis dis parturient montes, nascetur ridiculus mus. Interdum et malesuada
            fames ac ante ipsum primis in faucibus. Suspendisse tellus elit, fermentum sed
            urna quis, mattis condimentum tortor. Nullam vitae augue ornare nibh facilisis
            consectetur. Fusce tincidunt libero ut mauris suscipit auctor. Vestibulum nulla eros,
            molestie et lobortis ac, facilisis a eros. Aliquam nec est rhoncus, blandit lorem
            a, egestas quam. Donec suscipit quis nulla sit amet maximus. Suspendisse vestibulum
            aliquam ullamcorper. Nam egestas neque vitae orci cursus, at viverra metus feugiat.
            Mauris dapibus lorem faucibus elit bibendum aliquam. Nullam in tincidunt risus.
            Quisque sed nisi id elit mollis dapibus a vel tortor.'
        ]);

        Listing::create([
            'title' => 'Full-stack Engineer',
            'tags' => 'laravel, backend, api',
            'company' => 'Stark Industries',
            'location' => 'New York, NY',
            'email' => 'email2@email.com',
            'website' => 'https://www.starkindustries.com',
            'description' => 'Sed ut quam in quam egestas lobortis sit amet non ante. Suspendisse
            convallis nulla ut tincidunt tincidunt. Pellentesque ornare lobortis enim, non varius
            arcu accumsan nec. Proin blandit sollicitudin convallis. Sed eros nisi, egestas vel
            fringilla et, feugiat vitae diam. Aenean sem ante, viverra sit amet lacus non, porttitor
            semper quam. '
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
