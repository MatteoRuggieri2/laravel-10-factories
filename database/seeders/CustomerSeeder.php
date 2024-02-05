<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importo il model interessato
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Richiamo il metodo statico del model che evocherà la factory giusta (se abbiamo rispettato le convenzioni di laravel)
        // Customer::factory()->create();
        
        Customer::factory()->count(5)->create(); // Creo più elementi con "->count(5)"
    }
}
