<?php

namespace Database\Seeders;

use App\Models\GroupMenu;
use App\Models\Shoe;
use Illuminate\Database\Seeder;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shoeNames = ['Shoe A', 'Shoe B', 'Shoe C', 'Shoe D'];

        // Fetch all group menu ids
        $groupMenuIds = GroupMenu::all()->pluck('id')->toArray();

        foreach ($shoeNames as $shoeName) {
            // Assign a shoe to a random group menu
            $randomGroupId = $groupMenuIds[array_rand($groupMenuIds)];

            Shoe::create([
                'name' => $shoeName,
                'description' => 'Description for ' . $shoeName,
                'price' => rand(1000, 5000) / 100, // Random price between 10.00 to 50.00
                'group_menu_id' => $randomGroupId,
            ]);
        }
    }
}
