<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SyncTeachers extends Command
{
    protected $signature = 'sync:teachers';
    protected $description = 'Teacher profiles se users table mein data copy karein';

    public function handle()
    {
        // teacher_profiles se data uthana
        $teachers = DB::table('teacher_profiles')->get();
        $count = 0;

        foreach ($teachers as $teacher) {
            // Check karein ke email pehle se users table mein hai ya nahi
            $exists = User::where('email', $teacher->email)->exists();

            if (!$exists && !empty($teacher->email)) {
                User::create([
                    'name'     => $teacher->full_name,
                    'email'    => $teacher->email,
                    'password' => Hash::make('password123'), // Default password
                    'role'     => 'teacher',
                ]);
                $count++;
            }
        }

        $this->info("$count naye teachers users table mein add ho gaye hain!");
    }
}
