@extends('admin.layout.app')
@section('content')
 <div>
    <div>
      <admin-driver-create :states="{{json_encode($states)}}"></admin-driver-create>
    </div>
 </div>
@endsection