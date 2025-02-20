<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('id_card_number')->unique();
            $table->string('phone_number');
            $table->enum('marital_status', ['single', 'married', 'divorced', 'widowed']);
            $table->integer('years_of_experience')->default(0);
            $table->string('education_level');
            

            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('applicants');
    }
};