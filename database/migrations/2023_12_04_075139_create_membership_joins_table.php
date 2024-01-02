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
            $table->foreignId('country_id')->nullable()->constrained();
            $table->string('full_name');
            $table->string('town');
            $table->string('state')->nullable();
            $table->string('code');
            $table->string('contact_no');
            $table->string('address');
            $table->string('email');
            $table->string('district')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('membership_joins');
    }
};
