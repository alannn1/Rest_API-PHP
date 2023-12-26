<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')
    <link rel="stylesheet" type="text/css" href="{{ url('style.css') }}">
</head>
<body>
<section class="intro">    
    <div class="bg-image h-100" style="background-image: url('forest.jpg');">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,.25);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card bg-dark shadow-2-strong">
                            <div class="card-body">
                                <div class="table-responsive">
                                <a class="btn btn-primary" href="{{ url('pasien/add') }}" role="button"> Tambah Data </a>
                                    <table class="table table-dark table-borderless">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No Rekam Medis</th>
                                                <th>Riwayat Penyakit</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($query as $row)
                                            <tr>
                                                <td>{{ $row['id_pasien'] }}</td>
                                                <td>{{ $row['nama'] }}</td>
                                                <td>{{ $row['tgl_lahir'] }}</td>
                                                <td>{{ $row['jk'] }}</td>
                                                <td>{{ $row['no_rm'] }}</td>
                                                <td>{{ $row['rp'] }}</td>
                                                <td class="aksi">
                                                <a class="btn btn-primary" href="{{ url('getone/'.$row['id_pasien']) }}">View</a>
                                                <a class="btn btn-warning" href="{{ url('pasien/edit/'.$row['id_pasien']) }}">Edit</a>
                                                <form action="{{ url('pasien/delete/'.$row['id_pasien']) }}" method="post" onsubmit="return confirm('Yakin gak')">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        </table>
                                    <a class="btn btn-primary" href="{{ url('home') }}" role="button"> Kembali </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>