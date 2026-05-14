<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_profiles', function (Blueprint $table) {
            $table->id();
            // CSV Columns
            $table->string('timestamp')->nullable();                // Col 1
            $table->string('tuition_type')->nullable();             // Col 2
            $table->string('full_name')->nullable();                // Col 3
            $table->string('father_husband_name')->nullable();      // Col 4
            $table->string('cnic')->nullable();                     // Col 5
            $table->string('contact_number')->nullable();           // Col 6
            $table->string('whatsapp_number')->nullable();          // Col 7
            $table->string('email')->nullable();                    // Col 8
            $table->text('current_address')->nullable();            // Col 9
            $table->string('gender')->nullable();                   // Col 10
            $table->string('qualification')->nullable();            // Col 11
            $table->string('institute')->nullable();                // Col 12
            $table->string('experience')->nullable();               // Col 13
            $table->text('subjects')->nullable();                   // Col 14
            $table->string('classes')->nullable();                  // Col 15
            $table->string('boards')->nullable();                   // Col 16
            $table->text('preferred_areas')->nullable();            // Col 17
            $table->string('available_timings')->nullable();        // Col 18
            $table->string('expected_salary')->nullable();          // Col 19
            $table->string('languages')->nullable();                // Col 20
            $table->text('special_skills')->nullable();             // Col 21
            $table->text('reason_to_join')->nullable();             // Col 22
            $table->string('declaration')->nullable();              // Col 23
            $table->text('cnic_back_link')->nullable();             // Col 24
            $table->text('cnic_front_link')->nullable();            // Col 25
            $table->string('commission_policy')->nullable();        // Col 26
            $table->text('recording_policy_1')->nullable();         // Col 27
            $table->text('recording_policy_2')->nullable();         // Col 28

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
        Schema::dropIfExists('teacher_profiles');
    }
}
