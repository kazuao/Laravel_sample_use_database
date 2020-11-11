<?php

namespace Database\Seeders;

use App\Models\UserEntry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserEntry::create([
            "title" => "hogehoge",
            "body" => "fugafuga",
        ]);
    }
}
