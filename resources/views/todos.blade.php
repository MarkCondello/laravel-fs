@extends('layout')
@php
$columns = [
    (object) [
        'label' => 'User ID',
        'name' => 'userId'
    ],
    (object) [
        'label' => 'Title',
        'name' => 'title'
    ],
    (object) [
        'label' => 'Completed',
        'name' => 'completed'
    ],
];

@endphp
@section('content')
    <h1>ToDos.</h1>
    <search-sort-table 
        url="https://jsonplaceholder.typicode.com/todos"
        :columns="{{ json_encode($columns) }}"
    ></search-sort-table>
@endsection