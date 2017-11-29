<?php
/**
 * Created by PhpStorm.
 * User: ippil
 * Date: 11/28/2017
 * Time: 6:09 PM
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('tasklist')->insert([
            'role' => 'Receptionist',
            'task' => 'Main Lobby: Reservations & Direct',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Receptionist',
            'task' => 'Main Office: Monitoring logbook & Maintains security',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Receptionist',
            'task' => 'Main Lobby: Maintains telecommunication system',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Receptionist',
            'task' => 'Main Office: Assists in distribution of office supplies',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Accountant',
            'task' => 'Main Office: Cash handling & Input General Cashier Summary',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Accountant',
            'task' => 'Main Office: Assist with financial and tax audits',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Accountant',
            'task' => 'Main Office: Cash handling & Input General Cashier Summary',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Accountant',
            'task' => 'Main Office: Bill out credit cards (AMEX, DINERS,etc.)',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Accountant',
            'task' => 'Main Office: Review and approve all reconciliation',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Accountant',
            'task' => 'Main Office: Reconciles bank statements',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Accountant',
            'task' => 'Main Office: Reviewing all ledger details guest ledger',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Accountant',
            'task' => 'Main Office: Review and approve all reconciliation',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Accountant',
            'task' => 'Main Office: Perform follow-up billing',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Maintenance',
            'task' => 'Hotel Facilities: General Maintenance for(Pool / Gym)',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Maintenance',
            'task' => 'Hotel Facilities: Check Missing Articles',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Maintenance',
            'task' => 'Hotel Facilities: Safety Checks / Alarm System',
        ]);
        DB::table('tasklist')->insert([
            'role' => 'Maintenance',
            'task' => 'Main Lobby: General Repairs(Vending machines/Wi-Fi)',
        ]);
    }
}