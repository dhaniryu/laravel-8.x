@extends('layouts.index')

@section('content')
    <br/>
    <form method="POST" action="{{ url('pegawai') }}">
        @csrf
        ID : <input type="text" name="peg_id"><br/>
        Name : <input type="text" name="peg_name"><br/>

        <button type="submit">SIMPAN</button>
    </form>
@endsection
