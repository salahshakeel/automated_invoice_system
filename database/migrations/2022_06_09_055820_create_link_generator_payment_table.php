<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateLinkGeneratorPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      

        Schema::create('link_generator_payments', function (Blueprint $table) {
            $table->id();
            $table->text('invoice_id')->nullable()->unique();

            $table->text('payement_type')->nullable(false);
            $table->text('project_title')->nullable(false);
            $table->text('amount')->nullable(false);
            $table->longText('description')->nullable(false);
            $table->text('brand')->nullable(false);   
            $table->text('customer_email')->nullable(false); 
   
            $table->foreignId('sales_person_email_id')->references('id')->on('sales_persons');
            $table->foreignId('sales_payment_merchant_id')->references('id')->on('sales_payments');

            $table->text('fullname')->nullable();   
            $table->text('email')->nullable();
            $table->text('address')->nullable();
            $table->text('contact_no')->nullable(); 
            $table->text('dob')->nullable(); 
          

            $table->text('name_of_card')->nullable(); 
            $table->text('card_number')->nullable(); 
            $table->text('cvc')->nullable(); 
            $table->text('expiration')->nullable(); 
            $table->text('year')->nullable(); 

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
        Schema::dropIfExists('link_generator_payments');
    }
}
