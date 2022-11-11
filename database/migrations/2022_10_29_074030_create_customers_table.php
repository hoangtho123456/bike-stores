<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('image');
            $table->string('phone',25)->nullable()->change();
            $table->string('email');
            $table->string('street')->nullable()->change();
            $table->string('city',50)->nullable()->change();
            $table->string('state',25)->nullable()->change();
            $table->string('zip_code',5)->nullable()->change();
            $table->timestamps();
        });

        // Schema::table('customers', function (Blueprint $table) {
        //     $table->string('phone',25)->nullable()->change();
        //     $table->string('street')->nullable()->change();
        //     $table->string('city',50)->nullable()->change();
        //     $table->string('state',25)->nullable(false)->change();
        //     $table->string('zip_code',5)->nullable(false)->change();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
