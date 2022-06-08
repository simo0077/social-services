<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeBoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_bourses', function (Blueprint $table) {
            $table->id();
            $table->string("firstName");
            $table->string("lastName");
            $table->string("cin")->unique();
            $table->string("phone");
            $table->string("address");
            $table->enum("sexe",['male','female']);
            $table->string("city");
            $table->date("birthday");
            $table->string("school");
            $table->string("parentsSalary");
            $table->string("level");
            $table->string("message")->default('Your demand is not yet treated');
            $table->enum("status",[-1,0,1,2])->default('0');
            $table->string("imagecin");
            $table->string("pdfsalaryattestation");
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
        Schema::dropIfExists('demande_bourses');
    }
}
