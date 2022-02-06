@extends('admin.layout.app')
@section('content')
 <div>
    <div>
      <driver-form :driver="{{json_encode($driver)}}" :states="{{json_encode($states)}}"></driver-form>
    </div>
 </div>
@endsection