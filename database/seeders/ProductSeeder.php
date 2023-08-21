<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'Name' => 'Adansonii Mint',
                'Species' => 'Monstera',
                'Description' => 'A popular indoor plant with large, violin-shaped leaves.',
                'ImgLink' => 'https://plnts.com/_next/image?url=https%3A%2F%2Fwebshop.plnts.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2Faa5d334f459227518b6c3cf7ea9d29ed%2Fp%2Fl%2Fpl.s.m.101-1.jpg&w=640&q=80',
                'Price' => 24.99,
            ],
            [
                'Name' => 'Warocqueanum',
                'Species' => 'Anthurium',
                'Description' => 'A hardy indoor plant with tall, sword-like leaves.',
                'ImgLink' => 'https://plnts.com/_next/image?url=https%3A%2F%2Fwebshop.plnts.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2Faa5d334f459227518b6c3cf7ea9d29ed%2Fp%2Fl%2Fpl.s.m.096-1.jpg&w=640&q=80',
                'Price' => 19.99,
            ],
            [
                'Name' => 'Rubber Plant',
                'Species' => 'Ficus elastica',
                'Description' => 'An indoor plant with large, glossy leaves.',
                'ImgLink' => 'https://plnts.com/_next/image?url=https%3A%2F%2Fwebshop.plnts.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2Faa5d334f459227518b6c3cf7ea9d29ed%2Fp%2Fl%2Fpl.s.b.085-thumbnail.jpg&w=640&q=80',
                'Price' => 29.99,
            ],
            [
                'Name' => 'Peace Lily',
                'Species' => 'Spathiphyllum wallisii',
                'Description' => 'An indoor plant with glossy green leaves and white flowers.',
                'ImgLink' => 'https://plnts.com/_next/image?url=https%3A%2F%2Fwebshop.plnts.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2Faa5d334f459227518b6c3cf7ea9d29ed%2Fp%2Fl%2Fpl.s.m.069-2-2-1.jpg&w=640&q=80',
                'Price' => 14.99,
            ],
            [
                'Name' => 'Spider Plant',
                'Species' => 'Chlorophytum comosum',
                'Description' => "An indoor plant with long, thin leaves that grow from a central rosette.",
                'ImgLink' => "https://plnts.com/_next/image?url=https%3A%2F%2Fwebshop.plnts.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2Faa5d334f459227518b6c3cf7ea9d29ed%2Fp%2Fl%2Fpl.s.b.067-thumbnail.jpg&w=640&q=80",
                "Price" => 9.99
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
