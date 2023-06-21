<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="{{ url('profil/add') }}"><button class="btn btn-primary">Tambah Data</button></a>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama </th>
            <th>NO HP</th>
            <th>Email</th>
            <th>JENISKELAMIN</th>
            <th>Deskripsi</th>
            <th>ALAMAT</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
      @foreach ($portofolio as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->nisn}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->no_hp}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->JK}}</td>
            {{-- <td>{{$item->email}}</td> --}}
            <td>{{$item->deskripsi}}</td>
            <td>{{$item->alamat}}</td>
            <td><img src="/storage/{{$item->foto}}" width="150"></td>
            <td>
                <a href="profil/hapus/{{$item->id}}" class="btn btn-danger btn-sm">hapus</a>
                <a href="profil/edit/{{$item->id}}" class="btn btn-info btn-sm">edit</a>
            </td>
        </tr> 
        @endforeach
             
      
    </table>

@endsection
</body>
</html>