<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top:5%;">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <marquee behavior="" direction=""> <h4>MIN-IT Laravel 8 Basic Course(Insert,Update,Delete) For Beginners</h4></marquee>
                </div>
                <div class="card-body" >
                    <p style="float:right!important;" class="mt-3"><a class="btn btn-info" href="{{route('add.customer')}}">Add New Customer</a></p>
                    @include('message')
                    <div class="clearfix"></div>
                    <hr>
                    <div class="">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($customer_details as $customer_detail)
                                <tr>
                                    <th scope="row">{{$customer_detail->id}}</th>
                                    <td>{{$customer_detail->name}}</td>
                                    <td>{{$customer_detail->phone}}</td>
                                    <td>{{$customer_detail->address}}</td>
                                    <td>
                                    <a href="{{route('edit.customer',$customer_detail->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('delete.customer',$customer_detail->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="colmd-2">
        </div>
    </div>
</div>
   
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</body>
</html>