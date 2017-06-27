@extends('blade')

@section('title', 'Page Title')


@section('sidebar')
	@parent
    <p>这是子模板的 sidebar.</p>
@endsection

@section('content')
    

    {{isset($name)?$name:'Default'}}

@if ($status===1)
    我有一条记录！
@elseif ($status===2)
    我有多条记录！
@else
    我没有任何记录！
@endif

@for ($i = 0; $i < 10; $i++)
    目前的值为 {{ $i }}
@endfor

@php

echo "aa";

@endphp

@endsection