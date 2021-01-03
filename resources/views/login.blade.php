@extends('master')
@section('contant')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <form>
            <div class="form-group">
                <label>Phone or Email</label>
                <input type="email" name="email" placeholder="Enter your email" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">login</button>
        </form>
    </div>
</div>
@endsection
