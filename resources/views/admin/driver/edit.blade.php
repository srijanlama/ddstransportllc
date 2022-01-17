@extends('admin.layout.app')
@section('content')
 <div>
    <div>
      <admin-driver-edit :driver="{{json_encode($driver)}}"></admin-driver-edit>
    </div>
 </div>
@endsection