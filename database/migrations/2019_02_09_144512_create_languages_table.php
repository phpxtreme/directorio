<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**Languages Table
     *
     * @var string
     */
    private $table = 'languages';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');

            $table->string('flag', 2)
                ->nullable('false');

            $table->string('name', 10)
                ->nullable(false)
                ->unique();

            $table->boolean('active')
                ->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
