@extends ('layouts.index')

@section('content')
</br>

    @if(Session::has('success'))
          <p class="alert alert-success">Data Berhasil Disimpan</p><br/>
    @endif

    <a class="btn btn-info" href="{{ url('TP/create') }}">Tambah</a>

    <table class="table-bordered table">
        <tr>
            <th>ID</th>
            <th>ID Tim</th>
            <th>ID Pegawai</th>
        </tr>
        @foreach ($datas as $key => $value)
          <tr>
              <td>{{ $value->tim_peg_id }}</td>
              <td>{{ $value->tim_id }}</td>
              <td>{{ $value->peg_id }}</td>
              <td>
                <form action="{{ url('pegawai/'.$value->peg_id) }}" method="POST">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-danger" type="submit">DELETE</button>
              </form></td>
          </tr>
        @endforeach
    </table>
@endsection
