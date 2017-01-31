@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <div class="row">
                        <ul class="nav-links">
                            <li>
                                <router-link to='/user'>User</router-link>
                            </li>
                        </ul>
                    </div>
                    <br/>
                    <div class="row">
                        <router-view></router-view>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
