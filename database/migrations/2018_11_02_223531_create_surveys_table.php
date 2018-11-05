<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * The name of the database connection to use.
     *
     * @var string
     */
    protected $connection = 'mongodb';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)
            ->table('surveys', function (Blueprint $collection) {
                $collection->index('_id');
                $collection->string('name', 100);
                $collection->tinyInteger('age');
                $collection->string('gender', 10);
                $collection->string('country', 100);
                $collection->string('favorite_color', 10);
                $collection->tinyInteger('rating');
                $collection->tinyInteger('likely_to_recommend');
                $collection->mediumText('comments');
                $collection->boolean('isFinished');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)
            ->table('surveys', function (Blueprint $collection) {
                $collection->drop();
            });
    }
}
