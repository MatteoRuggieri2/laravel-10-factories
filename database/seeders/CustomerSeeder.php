<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importo il model interessato
use App\Models\Customer;
use App\Models\CustomerInfo;
use App\Models\Order;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Richiamo il metodo statico del model che evocherà la factory giusta (se abbiamo rispettato le convenzioni di laravel)
        // Questo genererà 1 Customer
        // Customer::factory()->create();
        
        // Creo più Customer con "->count(5)"
        // Customer::factory()->count(5)->create();

        // Creo 5 Customer che hanno in relazione 1 gruppo di informazioni e 3 ordini ognuno
        Customer::factory()
                ->has(CustomerInfo::factory()->count(1))  // 1 to 1
                ->has(Order::factory()->count(3))  // 1 to many
                ->count(5)
                ->create();
    }
}
