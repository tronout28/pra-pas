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

    @foreach( $tb_bmw as $carbmw)
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$carbmw['model_name']}}</td>
      <td>{{$carbmw['color']}}</td>
      <td>
      <a href="/bmw/detail/{{$carbmw->id}}" class="btn btn-outline-primary">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection