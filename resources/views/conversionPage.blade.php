@extends('layouts.app')
@section('content')
<div class="flex justify-center text-3xl mt-10">
    <h1>Currency Converter</h1>
</div>
<br>
<div class="flex justify-center">
    {!! Form::open(['action' => 'App\Http\Controllers\CurrencyController@show']) !!}
        <select name="currencies">
            @foreach ($symbolArray as $symbol)
                <option value="{{ $symbol }}">
                    {{ $symbol }}</option>
            @endforeach
        </select>
    {{ Form::text('amount') }}
    {!! Form::close() !!}
    @csrf <!-- {{ csrf_field() }} -->
</div>
@endsection
