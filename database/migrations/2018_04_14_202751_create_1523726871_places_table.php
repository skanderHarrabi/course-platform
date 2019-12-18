<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1523726871PlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('places')) {
            Schema::create('places', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nom')->nullable();
                $table->integer('nombre_de_place')->nullable()->unsigned();
                $table->tinyInteger('disponibilite')->nullable()->default('1');
                $table->string('localisation_address')->nullable();
                $table->double('localisation_latitude')->nullable();
                $table->double('localisation_longitude')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('places');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
