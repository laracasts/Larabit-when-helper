<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(20)->create();

        foreach ($users as $user) {
            if ($user->id === 1) {
                $user->award = 'Salesman of the Year';
            } else if ($user->id === 11) {
                $user->award = 'Employee of the Month';
            } else {
                continue;
            }

            $user->save();
        }


//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
