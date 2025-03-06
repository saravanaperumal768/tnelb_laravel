<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_loginlogs', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('email');
            $table->string('ipaddress');
            $table->timestamp('Idate')->nullable();
            $table->string('attempt');
            $table->decimal('duration', 8, 2);
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
        Schema::dropIfExists('mst_loginlogs');
    }
};
