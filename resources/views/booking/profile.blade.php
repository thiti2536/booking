@extends('layout.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">

    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <!-- <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Search Room</div>
                        <div class="panel-body">

                            <form class="form-horizontal" role="form" method="POST" action="">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Date :</label>
                                    <div class="col-md-8" style="font-family:SMBAdvance">
                                        <div class="control"><?php foreach($student as $row){ echo $row->student_id; } ?></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Time :</label>
                                    <div class="col-md-8">
                                        <div class="form-inline">
											
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">People :</label>
                                    <div class="col-md-8">
                                        <input type="people" class="form-control" name="people" value="{{ old('people') }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-7 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <!-- </div>
            </div>
        </div> -->
    </div>



    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <table border="1">
            <thead>
                <th>ProductID</th>
                <th>ProductName</th>
                <th>Price</th>
                <th>Quantity</th>
            </thead>
                <?php
                    foreach($student as $row){
                ?>
                    <tr>
                        <td><?php echo $row->student_id ?></td>
                        <td><?php echo $row->student_fname ?></td>
                        <td><?php echo $row->student_lastname ?></td>
                        <td><?php echo $row->student_passport ?></td>
                    </tr>
                <?php
                    }
                ?>
        </table>
    </div>


@endsection
