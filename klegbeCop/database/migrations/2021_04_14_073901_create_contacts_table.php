<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->boolean('professionnal')->default(false);
            $table->enum('civility', ['Mme', 'M.']);
            $table->string('name', 100)->nullable();
            $table->string('firstname', 100)->nullable();
            $table->string('company', 100)->nullable();
            $table->string('address');
            $table->string('addressbis')->nullable();
            $table->string('bp', 100)->nullable();
            $table->string('postal', 10); 
            $table->string('city', 100);
            $table->string('phone', 25);
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
