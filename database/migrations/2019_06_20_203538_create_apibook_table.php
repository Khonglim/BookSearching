<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApibookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apibook', function (Blueprint $table) {
            $table->increments('id');
            $table->text('barcode')->nullable();
            $table->text('location_code')->nullable();
            $table->text('bib_record_id')->nullable();
            $table->text('item_record_id')->nullable();
            $table->text('best_title')->nullable();
            $table->text('best_author')->nullable();
            $table->text('item_status_code')->nullable();
            $table->text('use3_count')->nullable();
            $table->text('copy_use_count')->nullable();
            $table->text('due_gmt')->nullable();
            $table->text('language_code')->nullable();
            $table->text('callno')->nullable();
            $table->text('group_code')->nullable();
            $table->text('class')->nullable();
            $table->text('class_x')->nullable();
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
        Schema::dropIfExists('apibook');
    }
}
