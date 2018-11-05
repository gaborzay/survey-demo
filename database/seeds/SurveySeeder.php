<?php

use Illuminate\Database\Seeder;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Survey::class, 50)->create()->each(function ($survey) {
            $survey->save(factory(App\Models\Survey::class)->make()->toArray());
        });
    }
}
