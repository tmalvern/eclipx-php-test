<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateRegistration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoices = Invoice::all();

        $substring = '';
        
        foreach ($invoices as $invoice) {
             $substring = substr($invoice->description, -6);
             if(!empty($substring)){
                $invoice->registration = $substring;
                $invoice->save();
             }
        }
    }
}
