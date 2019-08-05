@extends('common.master')
@section('title','新增成功')
@section('content')
<center>
<a href="/{{ $shortname }}">{{ url('/'.$shortname) }}</a>
</center>
@endsection