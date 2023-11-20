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

    @foreach( $tb_toyota as $cartoyota )
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$cartoyota['model_name']}}</td>
      <td>{{$cartoyota['color']}}</td>
      <td>
      <a href="/toyota/detail/{{$cartoyota->id}}" class="btn btn-outline-primary">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection