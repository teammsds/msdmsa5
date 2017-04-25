@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
<h3> New Tournament</h3>
{!! Form::open(['url' => 'tournaments']) !!}

<div class="form-group">
    {!! Form::label('to_number', 'Tournament Number:') !!}
    {!! Form::text('to_number',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('to_name', 'Tournament Name:') !!}
    {!! Form::text('to_name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('to_sdate', 'Start Date:') !!}
    {!! Form::text('to_sdate',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('to_edate', 'End Date:') !!}
    {!! Form::text('to_edate',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('to_totteams', 'Total Teams:') !!}
    {!! Form::text('to_totteams',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('to_cname', 'Contact Name:') !!}
    {!! Form::text('to_cname',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('to_cemail', 'Contact Email:') !!}
    {!! Form::text('to_cemail',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('to_cphone', 'Contact Phone:') !!}
    {!! Form::text('to_cphone',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}

</div>
</div>
</div>
</div>
@stop
