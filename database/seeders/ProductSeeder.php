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
            ],
            [
                'name' => 'Aloe Vera',
                'species' => 'Aloe barbadensis',
                'description' => 'Aloe vera is a succulent plant species of the genus Aloe. It is known for its medicinal properties and is commonly used in cosmetics and alternative medicine.',
                'imgLink' => 'https://plnts.com/_next/image?url=https%3A%2F%2Fwebshop.plnts.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2Faa5d334f459227518b6c3cf7ea9d29ed%2Fp%2Fl%2Fpl.m.063-thumbnail.jpg&w=640&q=80',
                'price' => 9.99
            ],
            [
                'name' => 'Fiddle Leaf Fig',
                'species' => 'Ficus lyrata',
                'description' => 'The fiddle leaf fig is a popular houseplant known for its large, violin-shaped leaves. It is native to western Africa and can grow up to 12 feet tall indoors.',
                'imgLink' => 'https://plnts.com/_next/image?url=https%3A%2F%2Fwebshop.plnts.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2Faa5d334f459227518b6c3cf7ea9d29ed%2Fp%2Fl%2Fpl.m.101-thumbnail.jpg&w=640&q=80',
                'price' => 19.99
            ],
            [
                'name' => 'Snake Plant',
                'species' => 'Sansevieria trifasciata',
                'description' => 'The snake plant, also known as mother-in-law\'s tongue, is a hardy plant that can tolerate low light and infrequent watering. It is known for its air-purifying properties.',
                'imgLink' => 'https://plnts.com/_next/image?url=https%3A%2F%2Fwebshop.plnts.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2Faa5d334f459227518b6c3cf7ea9d29ed%2Fp%2Fl%2Fpl_l_002-thumbnail_5.jpg&w=640&q=80',
                'price' => 14.99
            ],
            [
                'name' => "Swiss Cheese Plant",
                "species" => "Monstera deliciosa",
                "description" => "The Swiss cheese plant, also known as Monstera deliciosa, is a tropical plant native to the rainforests of southern Mexico and Central America. It's known for its large, heart-shaped leaves with distinctive holes.",
                "imgLink" => "https://plnts.com/_next/image?url=https%3A%2F%2Fwebshop.plnts.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2Faa5d334f459227518b6c3cf7ea9d29ed%2Fp%2Fl%2Fpl.m.146-thumbnail.jpg&w=640&q=80",
                "price" => 29.99
            ],
            [
                "name" => "Pothos",
                "species" => "Epipremnum aureum",
                "description" => "Pothos, also known as devil's ivy, is a popular houseplant known for its trailing vines and heart-shaped leaves. It's easy to care for and can thrive in low-light conditions.",
                "imgLink" => "https://plnts.com/_next/image?url=https%3A%2F%2Fwebshop.plnts.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2Faa5d334f459227518b6c3cf7ea9d29ed%2Fp%2Fl%2Fpl.l.035-thumbnail.jpg&w=640&q=80",
                "price" => 12.99
            ],
            [
                'name' => "Boston Fern",
                "species" => "Nephrolepis exaltata",
                "description" => "The Boston fern is a popular houseplant known for its feathery fronds and air-purifying properties. It is native to tropical regions and can grow up to 3 feet tall indoors.",
                "imgLink" => "https://plnts.com/_next/image?url=https%3A%2F%2Fwebshop.plnts.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2Faa5d334f459227518b6c3cf7ea9d29ed%2Fp%2Fl%2Fpl.l.040-1_1.jpg&w=640&q=80",
                "price" => 14.99
            ],
            [
                 "name" => "Chinese Evergreen",
                 "species" => "Aglaonema",
                 "description" => "The Chinese evergreen is a popular houseplant known for its attractive foliage and ability to thrive in low-light conditions. It is native to tropical and subtropical regions of Asia and New Guinea.",
                 "imgLink" => "https://plnts.com/_next/image?url=https%3A%2F%2Fwebshop.plnts.com%2Fmedia%2Fcatalog%2Fproduct%2Fcache%2Faa5d334f459227518b6c3cf7ea9d29ed%2Fp%2Fl%2Fpl.m.170-1.jpg&w=640&q=80",
                 "price" => 19.99
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
