<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pastes = config('pasta');

        foreach($pastes as $pasta) {
            $newProduct = new Product();

            $newProduct->title = $pasta['titolo'];
            $newProduct->type = $pasta['tipo'];
            $newProduct->cooking_time = $pasta['cottura'];
            $newProduct->weight = $pasta['peso'];
            $newProduct->description = $pasta['descrizione'];
            $newProduct->image = $pasta['src-p'];
    
            $newProduct->save();
        }
    }
}
