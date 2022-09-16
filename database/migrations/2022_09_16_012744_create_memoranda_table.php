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
        Schema::create('memoranda', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('created_by');
            $table->string('document_series_no');
            $table->string('id_no');
            $table->string('name_of_employee');
            $table->string('department');
            $table->string('section');
            $table->string('asset_code');
            $table->string('asset_type');
            $table->string('asset_description');
            $table->string('asset_serial_no');
            $table->string('asset_value');
            $table->string('prepared_by');
            $table->string('approved_by');
            $table->string('released_by');
            $table->string('checked_by')->nullable();
            $table->string('noted_by')->nullable();
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
        Schema::dropIfExists('memoranda');
    }
};
