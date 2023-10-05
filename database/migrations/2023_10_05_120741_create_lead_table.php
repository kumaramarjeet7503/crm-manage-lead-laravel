<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead', function (Blueprint $table) {
            $table->id();
            $table->string('lead_title',100);
            $table->string('lead_company',100);
            $table->string('lead_name',100);
            $table->string('lead_email',200);
            $table->string('lead_phone',20);
            $table->string('lead_source',100);
            $table->string('lead_status',100);
            $table->string('lead_address',100);
            $table->string('lead_city',100);
            $table->string('lead_state',100);
            $table->string('lead_zip',100);
            $table->string('lead_description',500);
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
        Schema::dropIfExists('lead');
    }
}
