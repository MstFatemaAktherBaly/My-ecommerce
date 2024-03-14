<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $testdata = new Category();
      $testdata->categoryName = 'Test';
      $testdata->category_slug = 'Test';
      $testdata->save();
    }
}
