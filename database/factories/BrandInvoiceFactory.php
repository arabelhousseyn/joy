<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandInvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand_id' => 1,
            'invoice_path' => 'https://books.google.dz/books?id=RZAmEAAAQBAJ&printsec=frontcover&dq=cigar&hl=en&sa=X&redir_esc=y#v=onepage&q=cigar&f=false'
        ];
    }
}
