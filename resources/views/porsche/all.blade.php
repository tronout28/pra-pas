@extends('layouts.main')

@section('container')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Model</th>
      <th scope="col">color</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  @php
  $no = 1
  @endphp

    @foreach( $tb_porsche as $carporsche)
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$carporsche['model_name']}}</td>
      <td>{{$carporsche['color']}}</td>
      <td>
      <a href="/porsche/detail/{{$carporsche->id}}" class="btn btn-outline-primary">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection