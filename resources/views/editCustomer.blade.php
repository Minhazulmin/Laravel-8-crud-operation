<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel Basic Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6" style="margin-top:10%;">
                <div class="card">
                    <div class="card-header">
                        <center> <h4  class="form-label">Customer Information</h4></center>
                    </div>
                    
                    <div class="card-body">
                        <form method="post" action="{{route('update.customer',$edit_customer->id)}}" enctype="multipart/form-data">
                        @csrf
                            <div class="mt-3" >
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$edit_customer->name}}">
                            </div>
                            <div class="mt-3" >
                                <label for="phone" class="form-label">phone</label>
                                <input type="number" class="form-control" name="phone" value="{{$edit_customer->phone}}">
                            </div>
                            <div class="mt-3" >
                                <label for="adress" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" value="{{$edit_customer->address}}">
                            </div>
                            <div class="mt-3" >
                                <button type="submit" class="btn btn-info">Update Customer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</body>
</html>