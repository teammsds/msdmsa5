@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style= "color: black">Teams</h4>
                      <a href="{{url('/teams/create')}}" class="btn btn-primary btn-sm">Add New Team</a>
                      <div class="pull-right">
                      <a href="{{action('Excelcontroller@exportteams')}}" class="btn btn-primary btn-sm">Download</a>
                      </div>
                      </div>
    <hr>
    <table class="table table-responsive table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>School Name</th>
            <th>Team Number</th>    
            <th>Team Name</th>
            <th>Team Coach</th>
            <th>Team Coach E-Mail</th>
            <th>Team Coach Phone</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($teams as $team)

                <tr style="font-size:12px">
                <td>{{ $team->school->s_name }}</td>
                <td>{{ $team->tm_number }}</td>
                <td>{{ $team->tm_name }}</td>
                <td>{{ $team->tm_coach }}</td>
                <td>{{ $team->tm_coachemail }}</td>
                <td>{{ $team->tm_coachphone }}</td>
                <td><a href="{{url('teams',$team->id)}}" class="btn btn-primary btn-sm">View</a></td>
                <td><a href="{{route('teams.edit',$team->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['teams.destroy', $team->id],'onsubmit' => 'return confirm("Are you sure you want to delete?")']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
    
            </div>
        </div>
    </div>
</div>
@endsection
