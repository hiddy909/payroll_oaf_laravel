
<!DOCTYPE html>
<html>
 <head>
    <title>PAYROLL-OAF</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/azia.css')}}" />
 </head>
 <body class="az-body">
    <div class="az-signin-wrapper">
        <div class="az-card-signin">
             <div class="az-signin-header">
                 <center><h4>OCEAN AIR PAYROLL</h4>
                 <img src="{{url('/images/pay.jpg')}}" alt="Girl in a jacket" width="250" height="100"/></center>
                 @if(isset(Auth::user()->email))
                        <script>window.location="/main/successlogin";</script>
                    @endif

                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ url('/main/checklogin') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <label>Enter Email</label>
                        <input type="email" name="email" style="height:40px"class="form-control username1" />
                        </div>
                        <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="password"  style="height:40px" class="form-control username1" />
                        </div>
                        <div class="form-group">
                        <input type="submit" name="login" class="btn btn-primary" value="Login" />
                        </div>
                    </form>
                </div>
            </div><!-- az-signin-header -->
        </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->
</body>
</html>