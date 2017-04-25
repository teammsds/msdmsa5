@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-15 col-md-offset-0">
                    <div class="panel panel-default">
                        <div class="panel-heading">
        <h1 style="color:gainsboro">Player Details</h1>
        <table class="table table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Player Number</td>
                <td><?php echo ($player['p_number']); ?></td>
            </tr>
            <tr>
                <td>Player First Name</td>
                <td><?php echo ($player['p_fname']); ?></td>
            </tr>
            <tr>
                <td>Player Last Name</td>
                <td><?php echo ($player['p_lname']); ?></td>
            </tr>
            <tr>
                <td>Player Address</td>
                <td>
                <table>
                <tr><td><?php echo ($player['p_street']); ?></td></tr>
                    <tr><td><?php echo ($player['p_city']); ?></td></tr>
                    <tr><td><?php echo ($player['p_state']); ?></td></tr>
                    <tr><td><?php echo ($player['p_zip']); ?></td></tr>
                    <tr><td><?php echo ($player['p_email']); ?></td></tr>
                    <tr><td><?php echo ($player['p_phone']); ?></td></tr>
                </table>
                </td>
            </tr>
            <tr>
                <td>Eligibility Status</td>
                <td><?php echo ($player['p_estatus']); ?></td>
            </tr>


            <tr> <td colspan="2">Fouls</td> </tr>
            <?php $foul=$player->foul; ?>
            <tr>
                <td> Yellow</td>
                <td><?php echo ($foul['y_card']); ?></td>
            </tr>

            <tr>
                <td> Red</td>
                <td><?php echo ($foul['r_card']); ?></td>

            </tr>


            </tbody>
        </table>
    </div>


    </div>
    </div>

    </div>
    </div>



@stop
