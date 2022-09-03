<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'name' => 'test-takahashi',
            'age'  => 26,
            'tell' => '090-0000-0000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
