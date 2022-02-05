@extends('admin.layout.app')
@section('content')
 <div>
    <div>
      <driver-form :states="{{json_encode($states)}}"></driver-form>
    </div>
 </div>
@endsection