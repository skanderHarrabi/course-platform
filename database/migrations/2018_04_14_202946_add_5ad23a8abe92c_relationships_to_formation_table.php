<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5ad23a8abe92cRelationshipsToFormationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formations', function(Blueprint $table) {
            if (!Schema::hasColumn('formations', 'category_id')) {
                $table->integer('category_id')->unsigned()->nullable();
                $table->foreign('category_id', '144801_5ad23912811a8')->references('id')->on('categories')->onDelete('cascade');
                }
                if (!Schema::hasColumn('formations', 'place_id')) {
                $table->integer('place_id')->unsigned()->nullable();
                $table->foreign('place_id', '144801_5ad23a86d232f')->references('id')->on('places')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formations', function(Blueprint $table) {
            
        });
    }
}
