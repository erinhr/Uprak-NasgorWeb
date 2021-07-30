<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Add Drink</title>
</head>

    <style type="text/css">

    body {
        height: 60vh;
        background-image: url('./img/drink.jpg');
        background-size: cover;
    }

    .card {
	background-color: #fff;
	border-radius: 8px;
	box-shadow: 1px 2px 8px;
	height: 300px;
	margin: 10rem auto;
	width: 300px;
	text-align: center;
    }

    .name {
	font-family: Arial;
	outline: thin;
	outline-color: black;
    border-radius: 5px;
    color: black;
    height: 30px;
    text-align: center;
    transition: 0.25s;
    width: 200px;

}

    .save {
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

    .txt {
        color: #540b0e;
        font-size: 30px;
        font-family: Bubbleboddy Neue Trial;
        text-align: center;
        line-height: 10vh;
        margin-bottom: 10vh;
    }

    .bg {
        background: #F7D1CD;
        height: 10px;
        border-radius: 8px;
    }

    .back {
        margin: 15rem auto;
	    text-align: center;
    }

    .txt2 {
        margin-left: 0;
        font-family: Bubbleboddy Neue Trial;
        line-height: 57vh;
        font-size: 20px;
        text-decoration: none;

    }

    .txt3 {
        font-family: Bubbleboddy Neue Trial;
        font-size: 10;
    }

    .txt4 {
        font-family: Bubbleboddy Neue Trial;
    }
    </style>
<body>
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session('status'))
                    <h4 class="alert alret-success txt4">{{session('status')}}</h4>
                    @endif
                    <div class="card">
                        <div class="card-header">
                        <h4 class="txt bg">ADD DRINK
                        <a href="{{url('admin')}}" class="btn btn-danger float-end"><h4 class="txt2">Back</h4></a>
                        </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{url('adddrink')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="txt3" for="">Add Image</label>
                                    <input type="file" name="gambar" class="form-control name">
                                </div>
                                <div class="masukan">
                                    <input type="text" name="nama" placeholder="Name Your Menu" class="name"><br><br>
                                    <input type="number" name="harga" placeholder="Type the Price" class="name"><br><br>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary save">Save Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>