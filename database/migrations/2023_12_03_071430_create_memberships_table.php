<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membership_category_id')->constrained();
            $table->string('title');
            $table->longText('desc');
            $table->string('photo');
            $table->integer('position');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('memberships');
    }
};
