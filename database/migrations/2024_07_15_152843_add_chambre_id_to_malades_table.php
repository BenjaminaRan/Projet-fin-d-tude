<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChambreIdToMaladesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('malades', function (Blueprint $table) {
            $table->foreignId('chambre_id')->nullable()->constrained('chambres');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('malades', function (Blueprint $table) {
            $table->dropForeign(['chambre_id']);
            $table->dropColumn('chambre_id');
        });
    }
}
