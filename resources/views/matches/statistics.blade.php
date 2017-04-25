@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-15 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
        {!! Form::open(['url' => 'table']) !!}
                        <h1 style="text-align:center"> Statistics </h1>
        <table class="table table-responsive table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th> Most Scored </th>
                <th> Most Assists </th>
                <th> Most Saves </th>
                <th> Most Passes  </th>
                <th> Most Fouls </th>
            </tr>
            </thead>

            <tbody>



                <tr>
                    <td>{{ $statistic->m_scored }}</td>
                    <td>{{ $statistic->m_assists }}</td>
                    <td>{{ $statistic->m_saves }}</td>
                    <td>{{ $statistic->m_passes }}</td>
                    <td>{{ $statistic->m_fouls }}</td>
                </tr>





            </tbody>
        </table>


    </div>
                </div>
            </div>
        </div>
    </div>







@stop
