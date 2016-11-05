<?php namespace Modules\Place\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Place\Repositories\PlaceRepository;

class PlaceDatabaseSeeder extends Seeder {

	/**
	 * @var PlaceRepository
	 */
	private $place;

	public function __construct(PlaceRepository $place)
	{
		$this->place = $place;
	}

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$data = [
			'city' => 'Kronach',
			'zip' => 96317,
			'en' => [
				'name' => 'Place page1',
				'slug' => 'place-page1',
				'description' => '<p><strong>You made it!</strong></p>',
				'meta_title' => 'Meta title',
				'meta_description' => 'Meta desc',
				'og_title' => "FB Title",
				'og_description' => "FB desc",
				'og_image' => "Some image",
				'og_type' => "Some tyepe"
			],
			'de' => [
				'name' => 'De1',
				'slug' => 'place-de1',
				'description' => '<p><strong>Geshaft!</strong></p>',

			],
		];

		$this->place->create($data);

		/*

		$data = [
			'city' => 'Kronach',
			'zip' => 96317,
			'en' => [
				'name' => 'Place page2',
				'slug' => 'place-page2',
				'description' => '<p><strong>You made it!</strong></p>',
			],
			'de' => [
				'name' => 'De2',
				'slug' => 'place-de2',
				'description' => '<p><strong>Geshaft!</strong></p>',
			],
		];

		$this->place->create($data);



		$data = [
			'city' => 'Kronach',
			'zip' => 96317,
			'en' => [
				'name' => 'Place page3',
				'slug' => 'place-page3',
				'description' => '<p><strong>You made it!</strong></p>',
			],
			'de' => [
				'name' => 'De3',
				'slug' => 'place-de3',
				'description' => '<p><strong>Geshaft!</strong></p>',
			],
		];

		$this->place->create($data);




		$data = [
			'city' => 'Kronach',
			'zip' => 96317,
			'en' => [
				'name' => 'Place page4',
				'slug' => 'place-page4',
				'description' => '<p><strong>You made it!</strong></p>',
			],
			'de' => [
				'name' => 'De4',
				'slug' => 'place-de4',
				'description' => '<p><strong>Geshaft!</strong></p>',
			],
		];

		$this->place->create($data);




		$data = [
			'city' => 'Kronach',
			'zip' => 96317,
			'en' => [
				'name' => 'Place page5',
				'slug' => 'place-page5',
				'description' => '<p><strong>You made it!</strong></p>',
			],
			'de' => [
				'name' => 'De5',
				'slug' => 'place-de5',
				'description' => '<p><strong>Geshaft!</strong></p>',
			],
		];

		$this->place->create($data);

		*/
		
	}


}