@extends('layouts.index')

@section('content')

    <br/>
    <form method="POST" action="{{ url('TP') }}">
        @csrf
        ID : <input type="text" name="tim_peg_id"><br/>
        ID Tim: <select name="tim_id">
    @foreach($tims as $Tim)
    <option value="{{ $Tim->tim_id }}">{{ $Tim->tim_id }}</option>>
    @endforeach
  </select>
       <br/>
        ID Pegawai :
        <select name="peg_id">
    @foreach($pegawais as $pegawai)
    <option value="{{ $pegawai->peg_id }}">{{ $pegawai->peg_id }}</option>>
    @endforeach
  </select>
       <br/>

        <button type="submit">SIMPAN</button>
    </form>
@endsection
