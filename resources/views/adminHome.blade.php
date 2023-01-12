@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    You are a Admin User.<br>
                    <a style="text-decoration: none" href="/products"> Manage Product </a><br>
                    <a style="text-decoration: none" href="/customers"> Manage Customer </a><br>
                    <a style="text-decoration: none" href="/products"> Manage Appointments </a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection