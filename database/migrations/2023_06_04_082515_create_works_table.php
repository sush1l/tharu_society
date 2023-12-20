<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            if (config('default.dual_language')) {
                $table->string('title_en');
                $table->longText('description_en');
            }
            $table->string('icon');
            $table->foreignId('work_category_id')->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('works');
    }
};
