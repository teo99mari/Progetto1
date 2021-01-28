<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cognome');
            $table->unsignedBigInteger('eta');
<<<<<<< HEAD
            $table->decimal('altezzaInMetri',8,2);
=======
            $table->decimal('altezzaInMetri', 8, 2);
>>>>>>> 2226fff4f9873893faf44f284b7055df19d58c46
            $table->string('profilo');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
