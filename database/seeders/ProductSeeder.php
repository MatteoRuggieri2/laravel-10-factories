<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'brand' => 'Apple',
                'name' => 'Iphone 15 Pro 256GB',
                'description' => 'Apple iPhone 15 Pro è uno smartphone iOS con caratteristiche all\'avanguardia che lo rendono una scelta eccellente per ogni tipo di utilizzo, rappresentando uno dei migliori dispositivi mobili mai realizzati. Dispone di un grande display da 6.1 pollici e di una risoluzione da 2556x1179 pixel, fra le più elevate attualmente in circolazione. Le funzionalità offerte da questo Apple iPhone 15 Pro sono innumerevoli e tutte al top di gamma. A cominciare dal modulo 5G che permette un trasferimento dati e una navigazione in internet eccellente, passando per la connettività Wi-fi e il GPS. L\'eccellenza di questo Apple iPhone 15 Pro è completata da una fotocamera con un sensore da ben 48 megapixel che permette di scattare foto di alta qualità con una risoluzione di 8000x6000 pixel e di registrare video in 4K alla risoluzione di 3840x2160 pixel. Lo spessore di 8.3mm è contenuto e rende questo Apple iPhone 15 Pro molto interessante.',
                'price' => 1369,
            ],
            [
                'brand' => 'DJI',
                'name' => 'DJI Mini 3 Pro con DJI Smart Controller',
                'description' => 'Il DJI Mini 3 Pro con DJI Smart Control è un connubio di potenza e praticità, progettato per soddisfare le esigenze degli appassionati di droni. Con la sua dimensione compatta e peso ridotto, il Mini 3 Pro è facile da trasportare, offrendo allo stesso tempo una serie di funzioni avanzate.',
                'price' => 809,
            ],
            [
                'brand' => 'Sony',
                'name' => 'Sony Alpha 7 IV - Solo Corpo',
                'description' => 'Con prestazioni rivoluzionarie per foto e video, α7 IV è il prodotto ibrido ideale che offre immagini mozzafiato per la distribuzione e la condivisione immediate. α7 IV è una fotocamera progettata per portare in vita le visioni artistiche dei creatori di oggi.',
                'price' => 2418,
            ],
            [
                'brand' => 'Fujifilm',
                'name' => 'Fujifilm X-S20 - Kit XF18-55mm F2.8-4',
                'description' => 'Fujifilm continua a perseguire l\'elevata fattura delle immagini da produttore di strumenti fotografici. Queste fotocamere digitali vantano un sensore che è circa 1,7 volte le dimensioni di un sensore full frame. Grazie alla combinazione degli obiettivi con l\'ottima tecnologia imaging di Fujifilm, il sistema di queste fotocamere può offrire quella elevata risoluzione e quella ricchezza di tonalità che i fotografi professionisti si aspettano. Le fotocamere digitali Fujifilm offrono versatilità per un ampio scenario di utilizzo, dalla fotografia commerciale a quella paesaggistica.',
                'price' => 1696,
            ],
            [
                'brand' => 'Apple',
                'name' => 'Apple MacBook Pro 14" 2023 - M3 Pro - 256GB',
                'description' => 'CON I SUPER POTERI DI M3 PRO – Il chip Apple M3 Pro, con una CPU fino a 12-core e una GPU fino a 18-core, offre performance straordinarie per i lavori impegnativi, come manipolare enormi immagini panoramiche nell’ordine dei gigapixel, o compilare milioni di righe di codice. FINO A 18 ORE DI BATTERIA – Grazie all’efficienza del chip Apple, MacBook Pro resta al tuo fianco giorno e notte. E ti dà performance incredibili anche quando non è collegato alla corrente. (La durata della batteria varia a seconda dell’uso e della configurazione.)',
                'price' => 2599,
            ],
            [
                'brand' => 'AVM',
                'name' => 'AVM FRITZ!Box 5530',
                'description' => 'FRITZ!Box 5530 Fibra AON. Banda Wi-Fi: Dual Band (2.4 GHz/5 GHz), Wi-Fi standard: Wi-Fi 6 (802.11ax), Velocità di trasferimento dei dati WLAN (max): 3000 Mbit/s. Tipo di interfaccia LAN Ethernet: Gigabit Ethernet, Standard di rete: IEEE 802.3ah, IEEE 802.3bz. Algoritmi di sicurezza supportati: WPA2, WPA3. Tipo di prodotto: Router da tavolo, Colore del prodotto: Bianco, Indicatori LED: Potenza, WLAN, WPS. Cavi inclusi: AC, Fibra',
                'price' => 124.99,
            ],
            [
                'brand' => 'Asus',
                'name' => 'ASUS ROG Strix Arion case per SSD M.2',
                'description' => 'Case per SSD ROG Strix Arion M.2 NVMe -USB3.2 GEN2 Tipo-C (10 Gbps), doppio cavo da USB-C a C e da USB-C a A, senza cacciavite, pad termici inclusi, adatto a PCIe 2280/2260/2242/2230 M chiave/B+M chiave',
                'price' => 51.40,
            ],
            [
                'brand' => 'Samsung',
                'name' => 'Samsung T7 Shield',
                'description' => 'Straordinariamente resistente, veloce e compatto. Il nuovo T7 Shield ti offre prestazioni superiori anche in condizioni ambientali estreme. La super velocità interna e il design robusto ti consentono di lavorare in maniera fluida su qualsiasi progetto, anche per rapide operazioni di editing.',
                'price' => 115.23,
            ],
            [
                'brand' => 'Sony',
                'name' => 'Sony FE 70-200 mm f/2.8 GM OSS',
                'description' => 'Adatto a natura, sport e altri soggetti che richiedono più portata, questo obiettivo vanta nitidezza su tutta l\'immagine da 70 a 200 mm in una struttura compatta e leggera, perfetta per modelli full frame compatti con attacco E, come le serie α7 e α9.',
                'price' => 2120,
            ],
            [
                'brand' => 'Sony',
                'name' => 'Sony FE 100-400mm f/4.5-5.6 GM OSS',
                'description' => 'L\'obiettivo con zoom G Master ad alte prestazioni copre una straordinaria lunghezza focale di 100 - 400 mm, perfetta per catturare azione sportiva, animali e altri soggetti che richiedono una grande portata. Inoltre, offre una qualità dell\'immagine e prestazioni AF ottimali anche per applicazioni professionali sul campo, rilevando e catturando anche i soggetti più veloci con risoluzione e nitidezza eccezionali.',
                'price' => 2503.23,
            ],
            
        ];

        foreach ($products as $product) {
            $new_product = new Product();
            $new_product->brand = $product['brand'];
            $new_product->name = $product['name'];
            $new_product->description = $product['description'];
            $new_product->price = $product['price'];
            $new_product->save();
        }
    }
}
