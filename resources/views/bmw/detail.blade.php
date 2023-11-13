    @extends('layouts.main')

    @section('container')
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$tb_bmw->model_name}}</h5>
        <p class="card-text">{{$tb_bmw->color}}</p>
        <img src="{{$tb_bmw->image}}" alt="{{$tb_bmw->model_name}}" class="img-fluid w-100">
        <p class="card-text">Horsepower = {{$tb_bmw->horsepower}}</p>
        <p class="card-text">Production Year = {{$tb_bmw-> production_year}}</p>
        <p class="card-text">Manufacture date = {{$tb_bmw->manufacture_date}}</p>
        <a href="/bmw/all" class="btn btn-primary">Back</a>
    </div>
    @endsection