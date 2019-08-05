@extends('common.master')
@section('title','新增')
@section('content')
<h1>建立新的短網址</h1>

<form method="POST" action="{{ route('new.post') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="shortname">短網址</label>
        <input type="text" class="form-control" id="shortname" name="shortname"  value="{{ old('shortname') }}" placeholder="[A-Za-z0-9-_]">
        @if ($errors->has('shortname'))
            <div class="invalid-feedback">
            {{ $errors->first('shortname') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="content">原網址</label>
        <input type="textarea" class="form-control" id="url" name="url"  value="{{ old('url') }}" placeholder="請輸入網址">
        <!-- html editor -->
    </div>
    <button type="submit" class="btn btn-primary">建立</button>
</form>
@endsection