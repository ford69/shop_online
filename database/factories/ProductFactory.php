<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->words($nb=4,$asText=true);
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(500),
            'regular_price' => $this->faker->numberBetween(10,1000),
            'SKU' => 'DIGI' .$this->faker->unique()->numberBetween(100,1000),
            'stock_status' => 'instock',
            'quantity' => $this -> faker->numberBetween(100,200),
            'image'=> 'frozen_foods_' . $this->faker->numberBetween(1,5).'.JPG',
            'category_id' => 4,
            
        ];
    }
}
