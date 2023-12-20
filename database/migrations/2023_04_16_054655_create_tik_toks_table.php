<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tik_toks', function (Blueprint $table) {
            $table->id();
            if (config('default.dual_language')) {
                $table->string('title_en')->nullable();
            }
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('video');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tik_toks');
    }
};
