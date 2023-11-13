@extends('layouts.main')

@section('container')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$tb_porsche->model_name}}</h5>
    <p class="card-text">{{$tb_porsche->color}}</p>
    <img src="{{$tb_porsche->image}}" alt="{{$tb_porsche->model_name}}" class="img-fluid w-100">
    <p class="card-text">Horsepower = {{$tb_porsche->horsepower}}</p>
    <p class="card-text">Production Year = {{$tb_porsche-> production_year}}</p>
    <p class="card-text">Manufacture date = {{$tb_porsche->manufacture_date}}</p>
    <a href="/porsche/all" class="btn btn-primary">Back</a>
  </div>
@endsection