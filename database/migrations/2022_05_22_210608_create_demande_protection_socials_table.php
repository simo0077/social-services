<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeProtectionSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_protection_socials', function (Blueprint $table) {
            $table->id();
            $table->string("firstName");
            $table->string("lastName");
            $table->string("cin")->unique();
            $table->string("phone");
            $table->string("address");
            $table->enum("sexe",['male','female']);
            $table->string("city");
            $table->date("birthday");
            $table->double("salary");
            $table->string("profession");
            $table->enum("status",[-1,0,1,2])->default(0);
            $table->string("imagecin");



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
        Schema::dropIfExists('demande_protection_socials');
    }
}
