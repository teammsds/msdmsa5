@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-20 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 style= "color: black"> Fouls List </h4>

                    </div>
                    <hr>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr class="bg-info">
                            <th>Player </th>
                            <th>Yellow</th>
                            <th>Red</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($fouls as $foul)

                           <?php $player = $foul->player;?>


                            <tr style="font-size:12px">

                                <td>{{ $player->p_fname }} {{ $player->p_lname }}</td>
                                <td>{{ $foul->y_card }}</td>
                                <td>{{ $foul->r_card }}</td>
                            </tr>
                        @endforeach



                        </tbody>

                    </table>



                </div>
            </div>
        </div>
    </div>
@endsection


