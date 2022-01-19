@extends('admin.layout.app')
@section('content')
 <div>
    <div>
      <admin-setting-form :setting="{{json_encode($setting)}}"></admin-setting-form>
    </div>
 </div>
@endsection