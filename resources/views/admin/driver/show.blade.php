@extends('admin.layout.app')
@section('content')
  <driver-show :driver="{{json_encode($driver)}}"></admin-driver>
@endsection
