@extends('layouts.app')

@section('content')
    <h1>Twój koszyk</h1>

    <table>
        <thead>
        <tr>
            <th>Nazwa produktu</th>
            <th>Cena</th>
            <th>Ilość</th>
            <th>Suma</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cartItems as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->total }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>
        <p>Suma: {{ $cartTotal }}</p>
        <p>Ilość przedmiotów: {{ $cartCount }}</p>
    </div>

    <a href="{{ route('checkout') }}">Przejdź do kasy</a>
@endsection
