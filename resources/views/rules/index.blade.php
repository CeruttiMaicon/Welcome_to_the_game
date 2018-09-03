@extends('layouts.app')

@section('content')
<rules titulo="{{ trans('messages.rules') }}" url="{{url('/')}}" nomebotao="{{ trans('messages.start_game') }}" regra1="{{ trans('messages.regra1')}}" regra2="{{ trans('messages.regra2')}}" regra3="{{ trans('messages.regra3')}}" regra4="{{ trans('messages.regra4')}}" regra5="{{ trans('messages.regra5')}}" regra6="{{ trans('messages.regra6')}}" regra7="{{ trans('messages.regra7')}}" regra8="{{ trans('messages.regra8')}}"></rules>
@endsection
