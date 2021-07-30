<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Login Page
	</title>
	<link rel="stylesheet" href="login.css">
	<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">

    <style type="text/css">
    * {
	margin: 0;
	padding: 0;
}

.card {
	background-color: #fff;
	border-radius: 8px;
	box-shadow: 1px 2px 8px;
	height: 250px;
	margin: 10rem auto;
	width: 300px;
	text-align: center;
}

body {
	background-image: url('./img/nasgor1.jpg');
	background-size: cover;
}

.login {
	margin-top: 10px;
	padding: 25px;
	font-family: Bubbleboddy Neue Trial;
}

.username {
	font-family: Bubbleboddy Neue Trial;
    color: black;
  
}

.password {
	font-family: Bubbleboddy Neue Trial;
    color: black;
}


.tombol_login {
	font-family: Bubbleboddy Neue Trial;
	border: none;
    border-radius: 21px;
    cursor: pointer;
    color: black;
    height: 42.3px;
    margin: 0 auto;
    transition: 0.25s;
    width: 153px;
}
    </style>
</head>

<body>

	<div class="home card">
		<h1 class="login">LOGIN</h1>
		<form method="POST" action="{{ route('login') }}">
   			@csrf
        	<div class="masukan">
				<div class="form-group row username">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>
						<div class="form-group row password">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <br>
						<div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary tombol_login">
                                    {{ __('Login') }}
                                </button>
                                
                                <br>
                            </div>
                        </div>
                        </div><br><br>
			</div>
		</form>
	</div>

</body>

</html>