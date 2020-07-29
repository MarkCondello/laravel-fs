@extends('layout')

@php 
    $accessories = [
        (object) [
            'productId' => "1234",
            'productImg' => "http://placekitten.com/300/300",
            'productName' => "Kitten 1",
            'productPrice' => "$111",
            'productMembersPrice' => "$99",
            'accessory' => true,
            'sku' => "0987",
        ],
        (object) [
            'productId' => "5678",
            'productImg' => "http://placekitten.com/300/300",
            'productName' => "Kitten 2",
            'productPrice' => "$222",
            'productMembersPrice' => "$199",
            'accessory' => true,
            'sku' => "7654",
        ],
        (object) [
            'productId' => "2584",
            'productImg' => "http://placekitten.com/300/300",
            'productName' => "Kitten 3",
            'productPrice' => "$333",
            'productMembersPrice' => "$299",
            'accessory' => true,
            'sku' => "53589",
        ],
        (object) [
            'productId' => "183246",
            'productImg' => "http://placekitten.com/300/300",
            'productName' => "Kitten 4",
            'productPrice' => "$4444",
            'productMembersPrice' => "$399",
            'accessory' => true,
            'sku' => "134644",
        ],
    ];
@endphp
@section('content')
    <h1>About!</h1>

    <accessories-slider accessories='{!! json_encode($accessories) !!}'></accessories-slider>
@endsection