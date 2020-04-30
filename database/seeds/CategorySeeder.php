<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level1 = 5; // top level categories
        $level2 = 3; // first level subcategories per parent
        $level3 = 3; // second level subcategories per parent
        $categoryCount = $level1 * (1 + $level2 * (1 + $level3)); // total

        // Creates categories without initializing parent ids
        factory(Category::class, $categoryCount)->create();

        $categories = Category::all();

        // Sets parent id of first level subcategories
        for($i = 1; $i <= $level1; $i++) {
            for($j = 1; $j <= $level2; $j++) {
                $category = $categories[$level1 + ($i - 1) * $level2 + $j - 1];
                $category->parent_id = $i;
                $category->level = 2;
                $category->save();
            }
        }

        // Sets parent id of second level subcategories
        for($i = 1; $i <= $level1 * $level2; $i++) {
            for($j = 1; $j <= $level3; $j++) {
                $category = $categories[$level1 * (1 + $level2) + ($i - 1) * $level2 + $j - 1];
                $category->parent_id = $i + $level1;
                $category->level = 3;
                $category->save();
            }
        }
    }
}
