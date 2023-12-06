<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = new User;

        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->email_verified_at = new DateTime('today');
        $user->password = 'secret';
        $user->level = 2;
        $user->timestamps = new DateTime('today');
        $user->save();

        $user = null;
        $user = new User;

        $user->name = 'user';
        $user->email = 'user@user.com';
        $user->email_verified_at = new DateTime('today');
        $user->password = 'secret';
        $user->level = 0;
        $user->timestamps = new DateTime('today');
        $user->save();

    }
}
