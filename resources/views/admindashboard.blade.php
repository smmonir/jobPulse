@extends('layouts.adash')

@section('content')
<h1 aligncenter >Dashboard For Admin</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <a class="navbar-brand" href="http://localhost/jobPulse/public">
                    Laravel
                </a>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Companies</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Employee</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Plugins</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
                <button>Dashboard</button>
                <button>Admin</button>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
            </div>
        </div>
    </div>
</div>
@endsection