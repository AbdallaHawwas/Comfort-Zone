@extends('layouts.header')
@section("title","Register")
@section("content")

<div class="login-container">
    <form>
      <div class="row">
        <h4>Register</h4>
        <div class="input-group input-group-icon">
          <input type="text" placeholder="Full Name"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
        <div class="input-group input-group-icon">
          <input type="email" placeholder="Email Adress"/>
          <div class="input-icon"><i class="fa fa-envelope"></i></div>
        </div>
        <div class="input-group input-group-icon">
          <input type="password" placeholder="Password"/>
          <div class="input-icon"><i class="fa fa-key"></i></div>
        </div>
      </div>
      <div class="row">
        <div class="col-half">
          <h4>Date of Birth</h4>
          <div class="input-group">
            <div class="col-third">
              <input type="text" placeholder="DD"/>
            </div>
            <div class="col-third">
              <input type="text" placeholder="MM"/>
            </div>
            <div class="col-third">
              <input type="text" placeholder="YYYY"/>
            </div>
          </div>
        </div>
        <div class="col-half">
          <h4>Gender</h4>
          <div class="input-group">
            <input id="gender-male" type="radio" name="gender" value="male"/>
            <label for="gender-male">Male</label>
            <input id="gender-female" type="radio" name="gender" value="female"/>
            <label for="gender-female">Female</label>
          </div>
        </div>
      </div>
      <div class="row">
        <h4>Payment Details</h4>
        <div class="input-group">
          <input id="payment-method-card" type="radio" name="payment-method" value="card" checked="true"/>
          <label for="payment-method-card"><span><i class="fa fa-cc-visa"></i>Credit Card</span></label>
          <input id="payment-method-paypal" type="radio" name="payment-method" value="paypal"/>
          <label for="payment-method-paypal"> <span><i class="fa fa-cc-paypal"></i>Paypal</span></label>
        </div>
        <div class="input-group input-group-icon">
          <input type="text" placeholder="Card Number"/>
          <div class="input-icon"><i class="fa fa-credit-card"></i></div>
        </div>
        <div class="col-half">
          <div class="input-group input-group-icon">
            <input type="text" placeholder="Card CVC"/>
            <div class="input-icon"><i class="fa fa-user"></i></div>
          </div>
        </div>
        <div class="col-half">
          <div class="input-group">
            <select>
              <option>01 Jan</option>
              <option>02 Jan</option>
            </select>
            <select>
              <option>2015</option>
              <option>2016</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <h4>Terms and Conditions</h4>
        <div class="input-group">
          <input id="terms" type="checkbox"/>
          <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
        </div>
      </div>
      <button type="submit" class="btn btn-success d-block mx-auto">Register</button>
    </form>
    <div class="login">
        <a href="{{route("user.login")}}"><h4 style="font-size: 15px">* You already have an account ?</h4></a>
    </div>
</div>
<style>
.header{
  position: relative;
  background: linear-gradient(45deg, rgba(0, 0, 0, 0.589), transparent);
}
</style>
@endsection