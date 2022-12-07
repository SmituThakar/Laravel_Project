@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    You are a LabAssistant.<br><br>
                    <a href="/file-upload" style="background-color: #f44336;color: white;padding: 15px 25px;text-align: center;text-decoration: none;display: inline-block;">File Upload</a><br><br>
                    <a href="/users" style="background-color: #f44336;color: white;padding: 15px 25px;text-align: center;text-decoration: none;display: inline-block;">EXCEL Export-Import</a><br><br>            
                    <a href="/image-upload" style="background-color: #f44336;color: white;padding: 15px 25px;text-align: center;text-decoration: none;display: inline-block;">Image Upload</a><br><br>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection