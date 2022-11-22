@extends('layouts.header')
@section("title","Reset Password")
@section("content")

<div class="login-container">
    <form>
      @csrf
      <div class="row">
        <h4>Reset Password</h4>
        <div class="input-group input-group-icon">
          <input type="text" placeholder="Email Address"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
      </div>
      <button type="submit" class="btn btn-success d-block mx-auto">Reset</button>
    </form>
    <div class="register">
      <a href="{{route("user.register")}}"><h4 style="font-size: 15px">You don't have an account ?</h4></a>
    </div>
</div>
<style>
.header{
  position: relative;
  background: linear-gradient(45deg, rgba(0, 0, 0, 0.589), transparent);
}
</style>
@endsection