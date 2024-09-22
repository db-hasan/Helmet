<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Modeles;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Size;
use App\Models\Color;
use App\Models\Certification;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand = Brand::inRandomOrder()->first();
        $modeles = Modeles::inRandomOrder()->first();
        $type = Type::inRandomOrder()->first();
        $size = Size::inRandomOrder()->first();
        $color = Color::inRandomOrder()->first();
        $certification = Certification::inRandomOrder()->first();
        
        return [
            'name' => $this->faker->word,
            'brand_id' => $brand->id,
            'modeles_id' => $modeles->id,
            'type_id' => $type->id,
            'size_id' => $size->id,
            'color_id' => $color->id,
            'certification_id' => $certification->id,
            'purchase_price' => $this->faker->randomFloat(2, 100, 500), // example range for purchase price
            'wholesale_price' => $this->faker->randomFloat(2, 200, 600), // example range for wholesale price
            'retail_price' => $this->faker->randomFloat(2, 300, 700), // example range for retail price
            'stock_qty' => $this->faker->numberBetween(1, 100), // example stock quantity
            'vat' => $this->faker->randomFloat(2, 5, 20), // example VAT percentage
            'tax' => $this->faker->randomFloat(2, 5, 20), // example tax percentage
            'desc' => $this->faker->sentence, // random description
            'status' => 1, // active status
        ];
    }
}

