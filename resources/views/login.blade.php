@extends('master')
@section('contant')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="cart-body">
                    <form action="login" method="post">
                        <div class="form-group">
                            @csrf
                            <label>Phone or Email</label>
                            <input type="email" name="email" placeholder="Enter your email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter your password" class="form-control">
                        </div>
                        <button  class="btn btn-success" value="login">login</button>
                    </form>
                    <div class="card"></div>
                </div>
        </div>
        <div class="col-md-4"></div>

    </div>
</div>
@endsection
