<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("goats", function (Blueprint $table) {
            $table->string("image")->nullable()->after("null");
    });

    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table("goats", function (Blueprint $table) {
            $table->dropColumn("images");
        });
    }
}