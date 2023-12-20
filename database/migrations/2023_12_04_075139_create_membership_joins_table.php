<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('membership_joins', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('contact_no');
            $table->string('address');
            $table->string('email');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('membership_joins');
    }
};
