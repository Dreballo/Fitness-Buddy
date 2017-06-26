@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="meal-info">
            <h2 class="meal-name">{{$meal->name}}</h2>

            <span class="meal-time">
			Saturday, June 24th, 2017
		</span>

            <br>

            <span class="meal-data label label-pill label-primary">
			0 kCal
		</span>

            <span class="meal-data label label-pill label-default">
			0g Protein
		</span>

            <span class="meal-data label label-pill label-default">
			0g Carbohydrates
		</span>

            <span class="meal-data label label-pill label-default">
			0g Fat
		</span>
        </div>

        <hr>

        <h3>Foods</h3>


        @if(!$meal->foods->isEmpty())
            <ul class = "list-group">
            @foreach($meal->foods as $food)
                <li class="list-group-item">
                    {{ $food->name }}
                </li>

            @endforeach
            </ul>
            @else
                <p>No Foods associated with this meal. Add some below.</p>
        @endif

        <hr>

        <form action="/meals/{{$meal->id}}/foods" method="post">

            {{csrf_field()}}

            <div class="form-group row">
                <label for="name" class="col-sm-2 form-control-label">Food Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="name" placeholder="Food Name" required="">
                </div>
            </div>

            <div class="form-group row">
                <label for="protein" class="col-sm-2 form-control-label">Protein</label>
                <div class="col-sm-10">
                    <input class="form-control" type="number" name="protein" placeholder="Protein/g" required="">
                </div>
            </div>

            <div class="form-group row">
                <label for="carbohydrates" class="col-sm-2 form-control-label">Carbohydrates</label>
                <div class="col-sm-10">
                    <input class="form-control" type="number" name="carbohydrates" placeholder="Carbohydrates/g" required="">
                </div>
            </div>

            <div class="form-group row">
                <label for="fat" class="col-sm-2 form-control-label">Fat</label>
                <div class="col-sm-10">
                    <input class="form-control" type="number" name="fat" placeholder="Fat/g" required="">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-offset-2 col-sm-10">
                    <button class="btn btn-primary" value="submit" type="submit">Submit</button>
                </div>
            </div>

        </form>

    </div>
@endsection