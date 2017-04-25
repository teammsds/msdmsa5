@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-15 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
        {!! Form::open(['url' => 'table']) !!}
                        <h3 style="text-align:center"> Team Standings </h3>
        <table class="table tabel-sm table-striped table-hover tabel-responsive">
            <thead>
            <tr >
                <th> </th>
                <th> W </th>
                <th> L </th>
                <th> D </th>
                <th> GF  </th>
                <th> GA </th>
                <th> Points </th>
            </tr>
            </thead>

            <tbody>


            @foreach ($leaderboards as $leaderboard)
                <tr>
                    <td>{{ $leaderboard->t_name }}</td>
                    <td>{{ $leaderboard->wins }}</td>
                    <td>{{ $leaderboard->losses }}</td>
                    <td>{{ $leaderboard->draws }}</td>
                    <td>{{ $leaderboard->gfor }}</td>
                    <td>{{ $leaderboard->gaga }}</td>
                    <td>{{ $leaderboard->points }}</td>
                </tr>
            @endforeach




            </tbody>
        </table>
       

    </div>
                </div>
            </div>
        </div>
    </div>







@stop
