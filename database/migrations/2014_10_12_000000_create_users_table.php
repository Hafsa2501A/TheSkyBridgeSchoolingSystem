<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto increment ID

            // CSV ke 13 columns ke liye fields
            $table->string('timestamp')->nullable();            // Col 1
            $table->string('name')->nullable();                 // Col 2
            $table->string('email')->nullable();                // Col 3
            $table->text('address')->nullable();                // Col 4
            $table->string('phone_number')->nullable();         // Col 5
            $table->string('preferred_timing')->nullable();      // Col 6
            $table->string('days_required')->nullable();        // Col 7
            $table->string('preferred_gender')->nullable();      // Col 8
            $table->text('fee_policy')->nullable();             // Col 9
            $table->text('declaration')->nullable();            // Col 10
            $table->string('tuition_preference')->nullable();   // Col 11
            $table->string('city')->nullable();                 // Col 12
            $table->string('country')->nullable();              // Col 13

            // Laravel Portal ke liye zaroori extra fields
            $table->string('role')->default('student');
            $table->string('password')->default('$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'); // Default: 'password'
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
        Schema::dropIfExists('users');
    }
}
