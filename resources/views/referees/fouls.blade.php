@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h3> Penalty Details</h3>
                    {!! Form::open(['url' => 'fouls']) !!}
                    <div class="form-group">
                        {!! Form::Label('player', 'Select Player') !!}<br>
                        {!! Form::select('player_id', $players) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::Label('match', 'Select Match') !!}<br>
                        {!! Form::select('match_id', $matches) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('y_card', 'Yellow card:') !!}
                        {!! Form::text('y_card',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('r_card', 'Red card:') !!}
                        {!! Form::text('r_card',null,['class'=>'form-control']) !!}
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
