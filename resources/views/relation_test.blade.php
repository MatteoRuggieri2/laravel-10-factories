<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test delle relazioni</title>
</head>
<body>

    <h1>CAR SHOP</h1>
    <h2>Customers:</h2>

    {{-- <span>{{ dd($customers) }}</span> --}}

    {{-- Lista di Clienti --}}
    <ul>
        @foreach ($customers as $customer)
            <li>
                <div>Nome: {{ $customer->name }}</div>
                <div>Cognome: {{ $customer->lastname }}</div>

                {{-- Lista di ordini relativi al cliente --}}
                <div>Ordini effettuati:
                    <ol>
                        @foreach ($customer->orders as $order)
                            <li>
                                <span>N° Ordine: {{ $order->order_number }}</span>

                                {{-- Prodotti inclusi nell'ordine --}}
                                <span>
                                    (Prodotti: 
                                    @foreach ($order->products as $product)
                                        @if ($loop->last)
                                            {{ $product->brand }} {{ $product->name }}
                                        @else
                                            {{ $product->brand }} {{ $product->name }},
                                        @endif
                                    @endforeach
                                    )
                                </span>

                            </li>
                        @endforeach
                    </ol>
                </div>
            </li>
            <hr>
        @endforeach
    </ul>
    
</body>
</html>