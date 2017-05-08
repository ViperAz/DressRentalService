<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UserRolesSeeder::class);
        $this->call(AddSampleUser::class);

        App\Voucher::create([
            'code' => 'TEST',
            'start_date' =>Carbon::create(2017, 5, 8, 00, 00, 00,'Asia/Bangkok'),
            'end_date' =>Carbon::create(2017,5, 17, 00, 00, 00,'Asia/Bangkok'),
            'discount_price'=> '20'
            ]);
            // print('test');
        App\Category::create(['name' => 'Shirt']);
        App\Category::create(['name' => 'Pants']);
        App\Category::create(['name' => 'Shorts']);
        App\Category::create(['name' => 'Skirt']);
        App\Category::create(['name' => 'Dress']);
        App\Category::create(['name' => 'Suit']);
        // print('test2');

        $productShirt = App\Category::where('name','=','Shirt')->first();

        if (!is_null($productShirt)){
            $productShirt->products()->saveMany([
                new App\Product([
                    'name'=> 'Red T-Shirt',
                    'desc'=> 'สุดยอดเสื้อผ้าแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Scot Blue T-Shirt',
                    'desc'=> 'สุดยอดเสื้อผ้าแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Pink T-Shirt',
                    'desc'=> 'สุดยอดเสื้อผ้าแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'White line T-Shirt',
                    'desc'=> 'สุดยอดเสื้อผ้าแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'White T-Shirt',
                    'desc'=> 'สุดยอดเสื้อผ้าแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ])
            ]);
        }

        $productPants = App\Category::where('name','=','Pants')->first();

        if (!is_null($productPants)){
            $productPants->products()->saveMany([
                new App\Product([
                    'name'=> 'Green trousers',
                    'desc'=> 'สุดยอดกางเกงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Black Pants',
                    'desc'=> 'สุดยอดกางเกงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Yellow trousers',
                    'desc'=> 'สุดยอดกางเกงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Black trousers',
                    'desc'=> 'สุดยอดกางเกงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Black trousers Premium',
                    'desc'=> 'สุดยอดกางเกงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด พร้อมไยพิเศษใส่เบาสบาย'
                ])
            ]);
        }

        $productShorts = App\Category::where('name','=','Shorts')->first();

        if (!is_null($productShorts)){
            $productShorts->products()->saveMany([
                new App\Product([
                    'name'=> 'Nike Shorts',
                    'desc'=> 'สุดยอดกางเกงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Black Shorts',
                    'desc'=> 'สุดยอดกางเกงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Brown not so Shorts',
                    'desc'=> 'สุดยอดกางเกงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Brown Shorts',
                    'desc'=> 'สุดยอดกางเกงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Grey Shorts',
                    'desc'=> 'สุดยอดกางเกงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด พร้อมไยพิเศษใส่เบาสบาย'
                ])
            ]);
        }

        $productSkirt = App\Category::where('name','=','Skirt')->first();

        if (!is_null($productSkirt)){
            $productSkirt->products()->saveMany([
                new App\Product([
                    'name'=> 'Skirt Black',
                    'desc'=> 'สุดยอดกระโปงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Skirt Jean',
                    'desc'=> 'สุดยอดกระโปงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Skirt Red',
                    'desc'=> 'สุดยอดกระโปงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Skirt Blue',
                    'desc'=> 'สุดยอดกระโปงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Skirt Sky Blue',
                    'desc'=> 'สุดยอดกระโปงแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ])
            ]);
        }

        $productDress = App\Category::where('name','=','Dress')->first();

        if (!is_null($productDress)){
            $productDress->products()->saveMany([
                new App\Product([
                    'name'=> 'Blue Dress',
                    'desc'=> 'สุดยอดเดรสแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'White Dress',
                    'desc'=> 'สุดยอดเดรสแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Dark Blue Dress',
                    'desc'=> 'สุดยอดเดรสแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Black Dress',
                    'desc'=> 'สุดยอดเดรสแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Red Dress',
                    'desc'=> 'สุดยอดเดรสแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ])
            ]);
        }

        $productSuit = App\Category::where('name','=','Suit')->first();

        if (!is_null($productSuit)){
            $productSuit
            ->products()->saveMany([
                new App\Product([
                    'name'=> 'Grey Suit',
                    'desc'=> 'สุดยอดชุดสูทแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Black Suit',
                    'desc'=> 'สุดยอดชุดสูทแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Blue Suit',
                    'desc'=> 'สุดยอดชุดสูทแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'Dark Suit',
                    'desc'=> 'สุดยอดชุดสูทแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ]),
                new App\Product([
                    'name'=> 'White Suit',
                    'desc'=> 'สุดยอดชุดสูทแห่งอนาคต Free Size เล็กโตก็ใส่ได้หมด'
                ])
            ]);
        }

        $product_img_1 = App\Product::where('name','=','Red T-Shirt')->first();

        if (!is_null($product_img_1)){
             $product_img_1
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/shirt_red_1.jpg'
            ])
            ]);
        }

        $product_img_2 = App\Product::where('name','=','Scot Blue T-Shirt')->first();

        if (!is_null($product_img_2)){
             $product_img_2
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/shirt_mix_2.jpg'
            ])
            ]);
        }

        $product_img_3 = App\Product::where('name','=','Pink T-Shirt')->first();

        if (!is_null($product_img_3)){
             $product_img_3
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/shirt_pink_3.jpg'
            ])
            ]);
        }

        $product_img_4 = App\Product::where('name','=','White line T-Shirt')->first();

        if (!is_null($product_img_4)){
             $product_img_4
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/shirt_cross_4.jpg'
            ])
            ]);
        }

        $product_img_5 = App\Product::where('name','=','White T-Shirt')->first();

        if (!is_null($product_img_5)){
             $product_img_5
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/shirt_white_5.jpg'
            ])
            ]);
        }

        $product_img_6 = App\Product::where('name','=','Green trousers')->first();

        if (!is_null($product_img_6)){
             $product_img_6
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/pant_green_1.jpg'
            ])
            ]);
        }

        $product_img_7 = App\Product::where('name','=','Black Pants')->first();

        if (!is_null($product_img_7)){
             $product_img_7
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/pant_black_2.jpg'
            ])
            ]);
        }

        $product_img_8 = App\Product::where('name','=','Yellow trousers')->first();

        if (!is_null($product_img_8)){
             $product_img_8
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/plant_yellow_3.jpg'
            ])
            ]);
        }

        $product_img_9 = App\Product::where('name','=','Black trousers')->first();

        if (!is_null($product_img_9)){
             $product_img_9
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/plant_black_4.jpg'
            ])
            ]);
        }

        $product_img_10 = App\Product::where('name','=','Black trousers Premium')->first();

        if (!is_null($product_img_10)){
             $product_img_10
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/plant_black_5.jpg'
            ])
            ]);
        }

        $product_img_11 = App\Product::where('name','=','Nike Shorts')->first();

        if (!is_null($product_img_11)){
             $product_img_11
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/short_nike_1.jpg'
            ])
            ]);
        }

        $product_img_12 = App\Product::where('name','=','Black Shorts')->first();

        if (!is_null($product_img_12)){
             $product_img_12
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/short_black_2.jpg'
            ])
            ]);
        }

        $product_img_13 = App\Product::where('name','=','Brown not so Shorts')->first();

        if (!is_null($product_img_13)){
             $product_img_13
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/short_brown_3.jpg'
            ])
            ]);
        }

        $product_img_14 = App\Product::where('name','=','Brown Shorts')->first();

        if (!is_null($product_img_14)){
             $product_img_14
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/short_brown_4.jpg'
            ])
            ]);
        }

        $product_img_15 = App\Product::where('name','=','Grey Shorts')->first();

        if (!is_null($product_img_15)){
             $product_img_15
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/short_grey_5.jpg'
            ])
            ]);
        }

        $product_img_16 = App\Product::where('name','=','Skirt Black')->first();

        if (!is_null($product_img_16)){
             $product_img_16
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/skirt_black_1.jpg'
            ])
            ]);
        }

        $product_img_17 = App\Product::where('name','=','Skirt Jean')->first();

        if (!is_null($product_img_17)){
             $product_img_17
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/skirt_jean_2.jpg'
            ])
            ]);
        }

        $product_img_18 = App\Product::where('name','=','Skirt Red')->first();

        if (!is_null($product_img_18)){
             $product_img_18
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/skirt_red_3.jpg'
            ])
            ]);
        }

        $product_img_19 = App\Product::where('name','=','Skirt Blue')->first();

        if (!is_null($product_img_19)){
             $product_img_19
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/skirt_blue_4.jpg'
            ])
            ]);
        }

        $product_img_20 = App\Product::where('name','=','Skirt Sky Blue')->first();

        if (!is_null($product_img_20)){
             $product_img_20
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/skirt_blue_5.jpg'
            ])
            ]);
        }

        $product_img_21 = App\Product::where('name','=','Blue Dress')->first();

        if (!is_null($product_img_21)){
             $product_img_21
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/dress_blue_1.jpg'
            ])
            ]);
        }

        $product_img_22 = App\Product::where('name','=','White Dress')->first();

        if (!is_null($product_img_22)){
             $product_img_22
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/dress_white_2.jpg'
            ])
            ]);
        }

        $product_img_23 = App\Product::where('name','=','Dark Blue Dress')->first();

        if (!is_null($product_img_23)){
             $product_img_23
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/dress_dark_3.jpg'
            ])
            ]);
        }

        $product_img_24 = App\Product::where('name','=','Black Dress')->first();

        if (!is_null($product_img_24)){
             $product_img_24
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/dress_black_4.jpg'
            ])
            ]);
        }

        $product_img_25 = App\Product::where('name','=','Red Dress')->first();

        if (!is_null($product_img_25)){
             $product_img_25
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/dress_red_5.jpg'
            ])
            ]);
        }

        $product_img_26 = App\Product::where('name','=','Grey Suit')->first();

        if (!is_null($product_img_26)){
             $product_img_26
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/suit_grey_1.jpg'
            ])
            ]);
        }

        $product_img_27 = App\Product::where('name','=','Black Suit')->first();

        if (!is_null($product_img_27)){
             $product_img_27
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/suit_black_pur_2.jpg'
            ])
            ]);
        }

        $product_img_28 = App\Product::where('name','=','Blue Suit')->first();

        if (!is_null($product_img_28)){
             $product_img_28
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/suit_grey_red_3.jpg'
            ])
            ]);
        }

        $product_img_29 = App\Product::where('name','=','Dark Suit')->first();

        if (!is_null($product_img_29)){
             $product_img_29
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/suit_black_4.jpg'
            ])
            ]);
        }

        $product_img_30 = App\Product::where('name','=','White Suit')->first();

        if (!is_null($product_img_30)){
             $product_img_30
            ->ProductImgs()->saveMany([
            new App\ProductImage([
                'img_url' => 'Img/suit_white_5.jpg'
            ])
            ]);
        }


        //


        $rentalProductShirt_1 = App\Product::where('name','=','Red T-Shirt')->first();

        if (!is_null($rentalProductShirt_1)){
             $rentalProductShirt_1
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '50.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '250.00'
            ])
            ]);
        }

        $rentalProductShirt_2 = App\Product::where('name','=','Scot Blue T-Shirt')->first();

        if (!is_null($rentalProductShirt_2)){
             $rentalProductShirt_2
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '50.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '250.00'
                ])
            ]);
        }

        $rentalProductShirt_3 = App\Product::where('name','=','White line T-Shirt')->first();

        if (!is_null($rentalProductShirt_3)){
             $rentalProductShirt_3
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '50.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '250.00'
                ])
            ]);
        }

        $rentalProductShirt_4 = App\Product::where('name','=','Pink T-Shirt')->first();

        if (!is_null($rentalProductShirt_4)){
             $rentalProductShirt_4
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '50.00'
                ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '150.00'
                ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '250.00'
                ])
            ]);
        }

        $rentalProductShirt_5 = App\Product::where('name','=','White T-Shirt')->first();

        if (!is_null($rentalProductShirt_5)){
             $rentalProductShirt_5
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '50.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '250.00'
            ])
            ]);
        }

        $rentalProductPants_1 = App\Product::where('name','=','Green trousers')->first();

        if (!is_null($rentalProductPants_1)){
             $rentalProductPants_1
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '89.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '188.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '495.00'
            ])
            ]);
        }

        $rentalProductPants_2 = App\Product::where('name','=','Black Pants')->first();

        if (!is_null($rentalProductPants_2)){
             $rentalProductPants_2
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '89.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '188.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '495.00'
            ])
            ]);
        }

        $rentalProductPants_3 = App\Product::where('name','=','Yellow trousers')->first();

        if (!is_null($rentalProductPants_3)){
             $rentalProductPants_3
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '89.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '188.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '495.00'
            ])
            ]);
        }

        $rentalProductPants_4 = App\Product::where('name','=','Black trousers')->first();

        if (!is_null($rentalProductPants_4)){
             $rentalProductPants_4
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '89.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '188.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '495.00'
            ])
            ]);
        }

        $rentalProductPants_5 = App\Product::where('name','=','Black trousers Premium')->first();

        if (!is_null($rentalProductPants_5)){
             $rentalProductPants_5
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '89.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '188.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '495.00'
            ])
            ]);
        }

        $rentalProductShort_1 = App\Product::where('name','=','Nike Shorts')->first();

        if (!is_null($rentalProductShort_1)){
             $rentalProductShort_1
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '89.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '188.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '495.00'
            ])
            ]);
        }

        $rentalProductShort_2 = App\Product::where('name','=','Black Shorts')->first();

        if (!is_null($rentalProductShort_2)){
             $rentalProductShort_2
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '89.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '188.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '495.00'
            ])
            ]);
        }

        $rentalProductShort_3 = App\Product::where('name','=','Brown not so Shorts')->first();

        if (!is_null($rentalProductShort_3)){
             $rentalProductShort_3
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '89.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '188.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '495.00'
            ])
            ]);
        }

        $rentalProductShort_4 = App\Product::where('name','=','Brown Shorts')->first();

        if (!is_null($rentalProductShort_4)){
             $rentalProductShort_4
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '89.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '188.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '495.00'
            ])
            ]);
        }

        $rentalProductShort_5 = App\Product::where('name','=','Grey Shorts')->first();

        if (!is_null($rentalProductShort_5)){
             $rentalProductShort_5
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '89.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '188.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '495.00'
            ])
            ]);
        }




        $rentalProductSkirt_1 = App\Product::where('name','=','Skirt Black')->first();

        if (!is_null($rentalProductSkirt_1)){
             $rentalProductSkirt_1
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '69.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '139.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '345.00'
            ])
            ]);
        }

        $rentalProductSkirt_2 = App\Product::where('name','=','Skirt Jean')->first();

        if (!is_null($rentalProductSkirt_2)){
             $rentalProductSkirt_2
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '69.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '139.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '345.00'
            ])
            ]);
        }

        $rentalProductSkirt_3 = App\Product::where('name','=','Skirt Red')->first();

        if (!is_null($rentalProductSkirt_3)){
             $rentalProductSkirt_3
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '69.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '139.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '345.00'
            ])
            ]);
        }

        $rentalProductSkirt_4 = App\Product::where('name','=','Skirt Blue')->first();

        if (!is_null($rentalProductSkirt_4)){
             $rentalProductSkirt_4
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '69.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '139.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '345.00'
            ])
            ]);
        }

        $rentalProductSkirt_5 = App\Product::where('name','=','Skirt Sky Blue')->first();

        if (!is_null($rentalProductSkirt_5)){
             $rentalProductSkirt_5
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '69.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '139.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '345.00'
            ])
            ]);
        }


        $rentalProductDress_1 = App\Product::where('name','=','Blue Dress')->first();

        if (!is_null($rentalProductDress_1)){
             $rentalProductDress_1
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '450'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '750.'
            ])
            ]);
        }

        $rentalProductDress_2 = App\Product::where('name','=','White Dress')->first();

        if (!is_null($rentalProductDress_2)){
             $rentalProductDress_2
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '450'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '750.'
            ])
            ]);
        }

        $rentalProductDress_3 = App\Product::where('name','=','Dark Blue Dress')->first();

        if (!is_null($rentalProductDress_3)){
             $rentalProductDress_3
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '450'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '750.'
            ])
            ]);
        }

        $rentalProductDress_4 = App\Product::where('name','=','Black Dress')->first();

        if (!is_null($rentalProductDress_4)){
             $rentalProductDress_4
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '450'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '750.'
            ])
            ]);
        }

        $rentalProductDress_5 = App\Product::where('name','=','Red Dress')->first();

        if (!is_null($rentalProductDress_5)){
             $rentalProductDress_5
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '450'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '750.'
            ])
            ]);
        }

        $rentalProductSuit_1 = App\Product::where('name','=','Grey Suit')->first();

        if (!is_null($rentalProductSuit_1)){
             $rentalProductSuit_1
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '450'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '750.'
            ])
            ]);
        }

        $rentalProductSuit_2 = App\Product::where('name','=','Black Suit')->first();

        if (!is_null($rentalProductSuit_2)){
             $rentalProductSuit_2
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '450'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '750.'
            ])
            ]);
        }

        $rentalProductSuit_3 = App\Product::where('name','=','Blue Suit')->first();

        if (!is_null($rentalProductSuit_3)){
             $rentalProductSuit_3
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '450'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '750.'
            ])
            ]);
        }

        $rentalProductSuit_4 = App\Product::where('name','=','Dark Suit')->first();

        if (!is_null($rentalProductSuit_4)){
             $rentalProductSuit_4
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '450'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '750.'
            ])
            ]);
        }

        $rentalProductSuit_5 = App\Product::where('name','=','White Suit')->first();

        if (!is_null($rentalProductSuit_5)){
             $rentalProductSuit_5
            ->RentalProducts()->saveMany([
            new App\RentalProduct([
                'day' => '1',
                'price' => '150.00'
            ]),
            new App\RentalProduct([
                'day' => '3',
                'price' => '450.00'
            ]),
            new App\RentalProduct([
                'day' => '5',
                'price' => '750.00'
            ])
            ]);
        }

        // $promotion_1 = App\Product::where('name','=','White Suit')->first()->value('id');
        //
        // $promotion_1 = App\RentalProduct::where('product_id','=',$promotion_1)->first();
        //
        // if (!is_null($promotion_1)){
        //      $promotion_1
        //     ->promotions()->saveMany([
        //     new App\Promotion([
        //     'start_date' =>Carbon::create(2017, 5, 8, 00, 00, 00),
        //     'end_date' =>Carbon::create(2017,5, 17, 00, 00, 00),
        //     'price' => '129.00'
        //     ])
        //     ]);
        // }
        //
        // $promotion_2 = App\RentalProduct::where('name','=','Red T-Shirt')->first();
        //
        // if (!is_null($promotion_2)){
        //      $promotion_2
        //     ->promotions()->saveMany([
        //     new App\Promotion([
        //     'start_date' =>Carbon::create(2017, 5, 8, 00, 00, 00),
        //     'end_date' =>Carbon::create(2017,5, 17, 00, 00, 00),
        //         'price' => '29.00'
        //     ])
        //     ]);
        // }
        //
        // $promotion_3 = App\RentalProduct::where('name','=','Brown Shorts')->first();
        //
        // if (!is_null($promotion_3)){
        //      $promotion_3
        //     ->promotions()->saveMany([
        //     new App\Promotion([
        //     'start_date' =>Carbon::create(2017, 5, 8, 00, 00, 00),
        //     'end_date' =>Carbon::create(2017,5, 17, 00, 00, 00),
        //         'price' => '49.00'
        //     ])
        //     ]);
        // }
        //
        // $promotion_4 = App\RentalProduct::where('name','=','Green trousers')->first();
        //
        // if (!is_null($promotion_4)){
        //      $promotion_4
        //     ->promotions()->saveMany([
        //     new App\Promotion([
        //     'start_date' =>Carbon::create(2017, 5, 8, 00, 00, 00),
        //     'end_date' =>Carbon::create(2017,5, 17, 00, 00, 00),
        //         'price' => '49.00'
        //     ])
        //     ]);
        // }

        // $Promotion = App\Product::where('name','=','White Suit')->first();

        // if (!is_null($rentalProductSuit_5)){
        //      $rentalProductSuit_5
        //     ->products()->saveMany([
        //     new App\RentalProduct([
        //         'day' => '1',
        //         'price' => '150.00'
        //     ]),
        //     new App\RentalProduct([
        //         'day' => '3',
        //         'price' => '450'
        //     ]),
        //     new App\RentalProduct([
        //         'day' => '5',
        //         'price' => '750.'
        //     ])
        //     ]);
        // }





    }
}
