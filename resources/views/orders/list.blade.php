@extends('layouts.app')
@section('content')
<h2>Список заказов:</h2>
<table class="table table-bordered table-striped table-hover">
    <thead>
    <tr>
        <th>ID заказа</th>
        <th>ФИО</th>
        <th>Элементы заказа</th>
        <th>Сумма</th>
        <th>Выполнен</th>
    </tr>
    </thead>
    <tbody>
@foreach ($orders as $order)
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->user->name }}</td>
        <td>{{ $order->menu->name }}</td>
        <td>{{ $order->menu->price }} сум</td>
        <td><a href="#" class="order_done">Выполнен</a></td>
    </tr>
@endforeach
    </tbody>
</table>
@endsection