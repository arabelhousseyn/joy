<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfilePictureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'path' => 'https://play-lh.googleusercontent.com/8QnH9AhsRfhPott7REiFUXXJLRIxi8KMAP0mFAZpYgd44OTOCtScwXeb5oPe1E4eP4oF=s180-rw'
        ];
    }
}
