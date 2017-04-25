@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 style="color:gainsboro">Player Details</h1>
        <table class="table table-bordered table-hover">
            <tbody style="background-color: darkseagreen">
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
            </tbody>
        </table>
    </div>


        </div>
    </div>

</div>
</div>
</div>


@stop
