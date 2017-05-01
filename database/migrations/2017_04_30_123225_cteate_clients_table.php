<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CteateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->text('company_name');
            $table->text('first_name');
            $table->text('last_name');
            $table->text('street_house_number');
            $table->text('zip_code');
            $table->text('city');
            $table->boolean('different');
            $table->text('install_street_house_number');
            $table->text('install_zip_code');
            $table->text('install_city');
            $table->text('email');
            $table->text('telephone');
            $table->text('reachability');
            $table->integer('service');
            $table->text('comments');
            $table->boolean('comments_hidden');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
