<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CteateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name')->default('')->nullable();
            $table->integer('id_user')->unsigned()->default(1);
            $table->string('street_house_number')->default('')->nullable();
            $table->string('zip_code')->default('')->nullable();
            $table->string('website')->default('')->nullable();
            $table->string('email')->default('')->nullable();
            $table->integer('distance')->default(70000)->nullable();
            $table->string('telephone')->default('')->nullable();
            $table->string('telephone2')->default('')->nullable();
            $table->string('fax')->default('')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('companies');
    }
}
