<?php

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var array $languages */
        $countries = config('init.countries');

        array_map(function ($country) {
            Country::create([
                'name'   => $country['name'],
                'code'   => $country['code'],
                'active' => $country['active']
            ]);
        }, $countries);
    }
}
