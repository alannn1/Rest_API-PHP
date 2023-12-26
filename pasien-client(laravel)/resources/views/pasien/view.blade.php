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
                                    <table class="table table-dark table-borderless">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No Rekam Medis</th>
                                                <th>Riwayat Penyakit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $query['id_pasien'] }}</td>
                                                <td>{{ $query['nama'] }}</td>
                                                <td>{{ $query['tgl_lahir'] }}</td>
                                                <td>{{ $query['jk'] }}</td>
                                                <td>{{ $query['no_rm'] }}</td>
                                                <td>{{ $query['rp'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a class="btn btn-primary" href="{{ url('getpasien') }}" role="button"> Kembali </a>
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