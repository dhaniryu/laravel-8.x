@extends ('layouts.index')

@section('content')
</br>

    @if(Session::has('success'))
          <p class="alert alert-success">Data Berhasil Disimpan</p><br/>
    @endif

    <a class="btn btn-info" href="{{ url('Tim/create') }}">Tambah</a>

    <table class="table-bordered table">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach ($datas as $key => $value)
          <tr>
              <td>{{ $value->tim_id }}</td>
              <td>{{ $value->tim_name }}</td>
          </tr>
        @endforeach
    </table>
@endsection
