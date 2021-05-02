@extends('layouts.app')
@section('content');
<div class="flex justify-center text-3xl mt-10">
    <h1>Currency Converter</h1>
</div>
<div>
    @csrf <!-- {{ csrf_field() }} -->
</div>
<div class="flex justify-center text-xl">
    <p>Converted to EUR: {{ $convertedRate }}</p>
</div>
@endsection