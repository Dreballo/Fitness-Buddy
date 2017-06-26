@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome, {{$user->name}}!</div>

                    <div class="panel-body">

                    @if($meals)

                        <p>Here's what you've eaten today.</p>

                        <br>

                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="/meals/159">CAR</a>
                                <span class="pull-right">
                                    2:22 PM
                                </span>
                            </li>
                            <li class="list-group-item">
                                <a href="/meals/182">Dinner</a>
                                <span class="pull-right">
                                    3:41 PM
                                </span>
                            </li>
                        </ul>

                        <br>

                        <p>Why not <a href="/meals/create">keep track of your next meal</a>, too?</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

