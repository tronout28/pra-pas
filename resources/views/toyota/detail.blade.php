@extends('layouts.main')

@section('container')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$tb_toyota->model_name}}</h5>
    <p class="card-text">{{$tb_toyota->color}}</p>
    <img src="{{$tb_toyota->image}}" alt="{{$tb_toyota->model_name}}" class="img-fluid w-100">
    <p class="card-text">Horsepower = {{$tb_toyota->horsepower}}</p>
    <p class="card-text">Production Year = {{$tb_toyota-> production_year}}</p>
    <p class="card-text">Manufacture date = {{$tb_toyota->manufacture_date}}</p>
    <a href="/toyota/all" class="btn btn-primary">Back</a>
  </div>
@endsection