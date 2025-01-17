<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDureeRestanteToChambresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chambres', function (Blueprint $table) {
            $table->integer('duree_restante')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('chambres', function (Blueprint $table) {
            $table->dropColumn('duree_restante');
        });
    }
    
}
