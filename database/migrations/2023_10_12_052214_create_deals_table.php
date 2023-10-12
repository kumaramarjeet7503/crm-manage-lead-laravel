<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount',10,2)->default(0.00) ;
            $table->string('deal_name',150) ;
            $table->string('stage',150) ;
            $table->date('closing_date') ;
            $table->unsignedBigInteger('account_id') ;
            $table->foreign('account_id')->references('id')->on('accounts') ;
            $table->unsignedBigInteger('contact_id') ;
            $table->foreign('contact_id')->references('id')->on('contacts') ;
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
        Schema::dropIfExists('deals');
    }
}
