<h2>Daftar jabatan</h2>
<table border="1" cellspacing="0" width="100%">
    <tr>
        <th>ID</th>
        <th>Nama Jabatan</th>
        <th>Keterangan</th>
    </tr>

    @foreach ($jabatan as $data)
        <tr>
        <td>{{$data->id_jabatan}}</td>
        <td>{{$data->nama_jabatan}}</td>
        <td>{{$data->keterangan}}</td>
        </tr>
    @endforeach
</table> 