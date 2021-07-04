<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterestedServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interestedServices = [
            'Search Marketplace',
            'Work as a Freelancer',
            'Buy Domains',
            'Sell Domains'
        ];

        foreach($interestedServices as $is)
        {
            DB::table('interested_services')->insert([
                'name' => $is
            ]);
        }
    }
}
