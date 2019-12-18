<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5ad2391271403FormationTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('formation_tag')) {
            Schema::create('formation_tag', function (Blueprint $table) {
                $table->integer('formation_id')->unsigned()->nullable();
                $table->foreign('formation_id', 'fk_p_144801_144803_tag_fo_5ad23912715a8')->references('id')->on('formations')->onDelete('cascade');
                $table->integer('tag_id')->unsigned()->nullable();
                $table->foreign('tag_id', 'fk_p_144803_144801_format_5ad239127166f')->references('id')->on('tags')->onDelete('cascade');
                
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
        Schema::dropIfExists('formation_tag');
    }
}
