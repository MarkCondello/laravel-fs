@extends('layout')
@php 
    $options = [
        (object) [
            'id' => "1234",
             'productName' => "Kitten 1",
             'price' => 11.99
        ],
        (object) [
            'id' => "5678",
             'productName' => "Kitten 2",
             'price' => 12.99

        ],
        (object) [
            'id' => "2584",
             'productName' => "Kitten 3",  
             'price' => 13.99
      
        ],
        (object) [
            'id' => "183246",
            'productName' => "Kitten 4",
            'price' => 14.99

        ],
    ];
@endphp
@section('content')
    <h1>Contact!</h1>
    <multi-select labelled-by='productName'  select-options='{!! json_encode($options) !!}'></multi-select>
@endsection