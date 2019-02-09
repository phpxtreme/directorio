<?php

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var array $languages */
        $languages = config('init.languages');

        array_map(function ($language) {
            Language::create([
                'flag'   => $language['flag'],
                'name'   => $language['name'],
                'active' => $language['active']
            ]);
        }, $languages);
    }
}
