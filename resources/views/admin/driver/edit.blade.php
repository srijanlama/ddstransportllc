@extends('admin.layout.app')
@section('content')
 <div>
    <div>
      <admin-driver-edit :driver="{{json_encode($driver)}}" :states="{{json_encode($states)}}"></admin-driver-edit>
    </div>
 </div>
@endsection