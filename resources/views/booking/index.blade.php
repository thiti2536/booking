@extends('layout.app')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
        <!-- <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-md-offset-2"> -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Search Room</div>
                        <div class="panel-body">
                            <!-- @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif -->

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Date</label>
                                    <div class="col-md-8" style="font-family:SMBAdvance">
                                        <input type="date" class="form-control" name="date" value="{{ old('date') }}" style="font-size:140%" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Time</label>
                                    <div class="col-md-8">
                                        <div class="form-inline">
                                            <input type="time" step="3600" minlength="8" maxlength="20" class="form-control" name="ftime" value="{{ old('ftime') }}" required>
                                            <label>To</label>
                                            <input type="time" step="3600" class="form-control" name="etime" value="{{ old('etime') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">people</label>
                                    <div class="col-md-8">
                                        <input type="people" class="form-control" name="people" value="{{ old('people') }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <!-- </div>
            </div>
        </div> -->

    <table border="1">
    	<thead>
        	<th>ProductID</th>
            <th>ProductName</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </thead>
        	<?php
            	foreach($data as $row){
			?>
                <tr>
                    <td><?php echo $row->room_id ?></td>
                    <td><?php echo $row->room_name ?></td>
                    <td><?php echo $row->room_people ?></td>
                    <td><?php echo $row->floor_id ?></td>
                    <td>
						hhh
                    </td>
                </tr>
            <?php
				}
				echo $data->render();
			?>
        <tbody>
        	
        </tbody>
    </table>

    <table border="1">
        <thead>
            <th>ProductID</th>
            <th>ProductName</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </thead>
            <?php foreach ($data1 as $stu){ ?>
                <tr>
                    <td><?php echo $stu->student_id ?></td>
                    <td><?php echo $stu->student_fname ?></td>
                    <td><?php echo $stu->student_lastname ?></td>
                    <td><?php echo $stu->student_password ?></td>
                    <td>
                        hhh
                    </td>
                </tr>
            <?php
                }
            ?>
        <tbody>
            
        </tbody>
    </table>
    </div>



<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12"></div>


@endsection
