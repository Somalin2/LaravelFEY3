<?php

namespace Database\Factories;
use App\Models\Phone;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        $data = $this->file_get_contents_curl('http://placekitten.com/400/300');
        $image = rand(0, 99999).'factory.png';
        $output = 'public/img/'.$image;
        file_put_contents( $output, $data );
        return [
            'name' => $this->faker->word,
            'category_id' => Phone::all()->random()->id,
            'price' => $this->faker->randomFloat(2, 0, 100),
            'description' => $this->faker->text,
            'image' => $image
        ];
    }
    function file_get_contents_curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
}
