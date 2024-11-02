<?php

namespace Database\Seeders;

use App\Models\Folder;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => '1234',
        // ]);

        $r1 = Folder::create(['name' => 'Root Folder 1']);
        $r1s1 = $r1->subfolders()->create(['name' => 'Subfolder 1']);
        $r1s2 = $r1->subfolders()->create(['name' => 'Subfolder 2']);
        $r1s1s1 = $r1s1->subfolders()->create(['name' => 'Subfolder 1.1']);

        $r2 = Folder::create(['name' => 'Root Folder 2']);
        $r2s1 = $r2->subfolders()->create(['name' => 'Subfolder 1']);
        $r2s2 = $r2->subfolders()->create(['name' => 'Subfolder 2']);


        $vault = $r1s1s1->vaults()->create(['name' => 'My Vault']);

        $secret1 = $vault->secrets()->create([
            'name' => 'Secret 1',
            'type' => 'short_text',
            'content' => 'This is a short secret.',
        ]);

        $secret2 = $vault->secrets()->create([
            'name' => 'Secret 2',
            'type' => 'text',
            'content' => 'This is a longer secret text.',
        ]);
    }
}
