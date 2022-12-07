@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    You are a Admin User.<br><br>
                    <a href="/products" style="background-color: #f44336;color: white;padding: 15px 25px;text-align: center;text-decoration: none;display: inline-block;">Add new items</a><br><br>
                    <a href="/user/create" style="background-color: #f44336;color: white;padding: 15px 25px;text-align: center;text-decoration: none;display: inline-block;">Add new user</a><br><br>
                    <a href="/generate-pdf" style="background-color: #f44336;color: white;padding: 15px 25px;text-align: center;text-decoration: none;display: inline-block;">PDF Generator</a><br><br>
                    <a href="/send-mail" style="background-color: #f44336;color: white;padding: 15px 25px;text-align: center;text-decoration: none;display: inline-block;">Send Email</a><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection