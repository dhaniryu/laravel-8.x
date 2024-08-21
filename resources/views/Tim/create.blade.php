@extends('layouts.index')

@section('content')
    <br/>
    <form method="POST" action="{{ url('Tim') }}">
        @csrf
        ID : <input type="text" name="tim_id"><br/>
        Name : <input type="text" name="tim_name"><br/>

        <button type="submit">SIMPAN</button>
    </form>
@endsection
