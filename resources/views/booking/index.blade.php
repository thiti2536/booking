@extends('layout.app')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    
    <!-- <div class="boxtop">
        <div>
            <center><span style="font-size:400%">WELCOME</span></center>
        </div>
        <div>
            <center><span style="font-size:200%">TO BOOKING ROOM</span></center>
        </div>
    </div> -->

    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
        <!-- <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> -->
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

                            <form class="form-horizontal" role="form" method="POST" action="">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Date :</label>
                                    <div class="col-md-8" style="font-family:SMBAdvance">
                                        <input type="date" class="form-control" name="date" value="{{ old('date') }}" style="font-size:140%" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Time :</label>
                                    <div class="col-md-8">
                                        <div class="form-inline">
                                            <input type="time" step="3600" minlength="8" maxlength="20" class="form-control" name="ftime" value="{{ old('ftime') }}" required>
                                            <label>To</label>
                                            <input type="time" step="3600" class="form-control" name="etime" value="{{ old('etime') }}" required>
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

            <?php //echo password_hash("golftest", PASSWORD_DEFAULT) ?>

    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <div>
            <center><span style="font-size:400%">WELCOME</span></center>
        </div>
        <div>
            <center><span style="font-size:200%">TO BOOKING ROOM</span></center>
        </div>

        <p style="color:#F00">{{ $errors->first('username')  }}</p>
        <p style="color:#F00">{{ $errors->first('password')  }}</p>

        @if (Session::has('message'))
        	{{ Session::get('message') }}
        @endif

        <p style="color:green"> <?php echo Session::get('success'); ?> </p>
        <p style="color:red">   <?php echo Session::get('fails'); ?>   </p>


    </div>


@endsection
