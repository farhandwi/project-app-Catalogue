<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cooperation>
 */
class CooperationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'cooperation_started_from' => now(),
            'detail_cooperation' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, vitae accusamus. Quisquam, incidunt voluptate id sunt quae laboriosam reiciendis temporibus fuga repellat quasi debitis accusamus a porro quas eos ex doloremque rem ad laborum ratione facilis earum, iste exercitationem? Est, quaerat fugiat possimus earum quis alias distinctio placeat fugit, expedita sed, ratione laboriosam neque magnam libero voluptas cum at. Dolorum nesciunt consectetur soluta, nihil fugit maxime reprehenderit deleniti quae assumenda error, beatae quisquam vero tenetur recusandae consequuntur magni laudantium quia impedit voluptate aspernatur. Quibusdam consequuntur modi ipsa non reiciendis ex cumque quod ea eligendi, excepturi sint obcaecati aliquid id magnam.', // password
        ];
    }
}
