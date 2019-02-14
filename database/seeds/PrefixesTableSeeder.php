<?php

use App\Models\Prefix;
use Illuminate\Database\Seeder;

class PrefixesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var array $prefixes */
        $prefixes = config('init.prefixes');

        array_map(function ($array) {
            foreach ($array as $country => $prefixes) {
                foreach ($prefixes as $prefix) {
                    Prefix::create([
                        'country_id' => $country,
                        'name'       => $prefix['name'],
                        'prefix'     => $prefix['prefix'],
                        'active'     => $prefix['active'],

                    ]);
                }
            }
        }, $prefixes);
    }
}
