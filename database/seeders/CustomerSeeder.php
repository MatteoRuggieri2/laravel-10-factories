<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importo il model interessato
use App\Models\Customer;
use App\Models\CustomerInfo;
use App\Models\Order;
use App\Models\Product;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //? Richiamo il metodo statico del model che evocherà la factory giusta (se abbiamo rispettato le convenzioni di laravel)
        //? Questo genererà 1 Customer
        // Customer::factory()->create();
        
        //? Creo più Customer con "->count(5)"
        // Customer::factory()->count(5)->create();

        // Creo 5 Customer che hanno in relazione 1 gruppo di informazioni e 3 ordini ognuno. Ogni ordine ha relazionato 2 prodotti.
        Customer::factory()
                ->has(CustomerInfo::factory()->count(1))          // 1 to 1
                ->has(Order::factory()                            // 1 to many
                           ->count(3)
                           ->hasAttached(Product::factory()       // Pivot Table
                                                ->count(2)
                                                ->create()))
                ->count(5)
                ->create();
    }
}
