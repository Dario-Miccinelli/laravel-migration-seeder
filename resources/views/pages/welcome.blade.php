@extends('layouts.app')

@section('page-title', 'Ciuff Ciuff')

@section('page-header')

    <h1 class="m-auto pt-2 text-warning">Train Infos</h1>
    <p class="text-warning pt-2">All the info about our trains</p>

@endsection


@section('page-main')
    <table class="table table-dark mt-5">
        <thead>
            <tr>
                <th scope="col" class="text-danger">Train Name</th>
                <th scope="col" class="text-danger" >Train cost</th>
                <th scope="col" class="text-danger">Train come from</th>
                <th scope="col" class="text-danger">Train is going to </th>
                <th scope="col" class="text-danger">Avaible Seat</th>
                <th scope="col" class="text-danger">Last update</th>
            </tr>
        </thead>
        @foreach ($train as $elem)
            <tbody>
                <tr>
                    <th scope="row">{{ $elem['train_name'] }}</th>
                    <td>{{ $elem['train_cost'] }}€</td>
                    <td>{{ $elem['train_come_from'] }}</td>
                    <td>{{ $elem['train_going_to'] }}</td>
                    <td>{{ $elem['train_available_seat'] }}</td>
                    <td>{{ $elem['updated_at'] }}</td>
                </tr>

            </tbody>
        @endforeach
    </table>
@endsection
