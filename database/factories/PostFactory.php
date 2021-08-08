<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        $dummyLinks = [
            "www.naver.com",
            "www.daum.net",
            "www.google.com"
        ];
//        포스트 :
//        - 타이틀 (필수)
//        - 설명 (옵셔널)
//        - 링크 (필수)
        return [
            'title' => $this->faker->text(15),
            'description' => $this->faker->text(50),
            'link' => $dummyLinks[random_int(0, 2)]
        ];
    }
}
