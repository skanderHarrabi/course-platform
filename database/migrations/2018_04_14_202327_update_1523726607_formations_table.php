<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1523726607FormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formations', function (Blueprint $table) {
            
if (!Schema::hasColumn('formations', 'date_debut_formation')) {
                $table->date('date_debut_formation')->nullable();
                }
if (!Schema::hasColumn('formations', 'duree')) {
                $table->integer('duree')->nullable()->unsigned();
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
        Schema::table('formations', function (Blueprint $table) {
            $table->dropColumn('date_debut_formation');
            $table->dropColumn('duree');
            
        });

    }
}
