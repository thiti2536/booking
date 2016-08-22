<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Booking Room</title>
<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/master.css')}}">
</head>
<body>
    
    <nav role="navigation" class="navbar navbar-default" style="background-color:#6FC">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Brand</a>
    </div>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Messages <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Inbox</a></li>
                    <li><a href="#">Drafts</a></li>
                    <li><a href="#">Sent Items</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Trash</a></li>
                </ul>
            </li>
        </ul>
        
        <form action="{{action('BookingController@login')}}" method="post">
        
		<ul class="nav navbar-nav navbar-right fonttopbar">
        	<li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
        </ul>
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          	<div class="modal-dialog" role="document">
            	<div class="modal-content">
              		<div class="modal-header">
                		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        	<span aria-hidden="true">&times;</span>
                        </button>
                		<h4 class="modal-title headlogin" id="myModalLabel">Login</h4>
              		</div>
              		<div class="modal-body">
                    	<center>
                            <input type="text" name="username" class="form-control boxinput" placeholder="username" 
                             style="margin-bottom:10px; width:80%" required>
                            <input type="password" name="password" class="form-control boxinput" placeholder="password" maxlength="16"
                             minlength="8" style="width:80%" required>
                         </center>
              		</div>
              		<div class="modal-footer">
                		<center><input name="submit" type="submit" class="btn btn-primary bodylogin" value="Login"></center>
              		</div>
            	</div>
          	</div>
        </div>
        
        </form>

    </div>
</nav>



        


@yield('content')




<script type="text/javascript" src="{{asset('jquery/jquery-3.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>