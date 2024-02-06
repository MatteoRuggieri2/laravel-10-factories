<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importo il model interessato
use App\Models\Customer;
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

        // Creo 5 Customer che hanno relazionati 3 ordini ognuno
        Customer::factory()
                ->has(Order::factory()->count(3))
                ->count(5)
                ->create();
    }
}
