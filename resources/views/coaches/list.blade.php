@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0">

                <fieldset class="panel-heading">

                    <h1 style= "color: black">Teams</h1>
                    {!! Form::open(['url' => 'teamlist']) !!}







                                @foreach ($teams as $team)

                        <fieldset style="color:white;border: 1px solid silver;background-color:white; display: inline-block;">

                                    <h3 style="color:darkgoldenrod"> <a href="{{url('/playerlist',$team->id)}}"> {{ $team->tm_name}}</a></h3>
                        </fieldset>

                                    </br></br>


                                @endforeach


                </div>
                </div>





        </div>
        </div>
    </div>
    </div>
</div>
@endsection
