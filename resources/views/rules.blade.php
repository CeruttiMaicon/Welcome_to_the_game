@extends('layouts.app')

@section('content')
<rules titulo="{{ trans('messages.rules') }}" url="{{url('/')}}" nomebotao="{{ trans('messages.start_game') }}"></rules>
@endsection
