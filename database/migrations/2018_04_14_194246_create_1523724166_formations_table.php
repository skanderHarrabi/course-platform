<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1523724166FormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('formations')) {
            Schema::create('formations', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->nullable();
                $table->string('featured')->nullable();
                $table->string('formateur')->nullable();
                $table->time('heure_debut_formation')->nullable();
                $table->string('slug')->nullable();
                $table->float('prix')->nullable();
                $table->date('date_fin_formation')->nullable();
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
        Schema::dropIfExists('formations');
    }
}
