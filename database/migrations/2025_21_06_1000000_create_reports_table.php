<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('reportable_id');
            $table->string('reportable_type');
            $table->unsignedInteger('reporter_id')->nullable();
            $table->text('reason')->nullable();
            $table->timestamps();
        });
    }
};
