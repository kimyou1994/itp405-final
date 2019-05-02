@extends('layout')

@section('title', 'Sign Up')

@section('main')
  <div style="height: 700px;">
    <h1>Sign Up</h1>
    <p>Already have an account? Please <a href="/login">Login</a></p>
    <form method="post">
      @csrf
      <div class="w3-padding">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control">
      </div>
      <div class="w3-padding">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control">
      </div>
      <div class="w3-padding">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control">
      </div>
      <input type="submit" value="Sign Up" class="w3-button">
    </form>
  </div>
@endsection
