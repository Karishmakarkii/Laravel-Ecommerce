<?php

namespace Database\Factories;

use App\Models\Product;
use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Node\Expr\Cast\Int_;
use Ramsey\Uuid\Type\Integer;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->sentence(),
            'product_desc' => $this->faker->paragraph(),
            'price' => '1000', 
            'category_id' => 1,
        
        ];
    }
}
