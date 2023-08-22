<?php

namespace Database\Seeders;

use App\Models\GroupMenu;
use Illuminate\Database\Seeder;

class GroupMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { // Create sample group menus
        $groupMenus = [
            'Sports',
            'Casual',
            'Formal',
            'Outdoor',
        ];

        foreach ($groupMenus as $groupName) {
            GroupMenu::create(['name' => $groupName]);
        }
    }
}
