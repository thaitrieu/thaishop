<?php



class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();


//        $this->call('ManufacturerTableSeeder');
        $this->call('ProductTableSeeder');
	}

}

class ManufacturerTableSeeder extends Seeder {

    public function run() {

//        DB::table('manufacturers')->truncate();

        $faker = Faker\Factory::create();

        for ( $i=0; $i<10; $i++ ){
            $manufacturers[] = ['name' => $faker->company];

        }

        DB::table('manufacturers')->insert($manufacturers);


    }
}

class ProductTableSeeder extends Seeder {

    public function run() {

        DB::table('products')->truncate();

        $faker = Faker\Factory::create();

        for ( $i=0; $i<100; $i++ ){
            $products[] = [
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 1, 500),
                'quantity' => $faker->numberBetween(0,500),
                'manufacturer_id' => $faker->numberBetween(1,7),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ];
        }

        DB::table('products')->insert($products);
    }
}