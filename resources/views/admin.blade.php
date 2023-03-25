<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container text-center m-3 p-4 bg-white">
        <h1 class="mb-3">HALAMAN ADMIN</h1>
        <div class="row">
            <div class="col-12">
                @component('layout.alert')
                @slot('class')
                warning
                @endslot
                100 Data Mahasiswa Perlu Diperbaiki
                @endcomponent

                @component('layout.alert')
                @slot('class')
                danger
                @endslot
                hari ini deadline laporan perjalanan dinas
                @endcomponent

                @component('layout.alert')
                @slot('class')
                success
                @endslot
                bulan depan cuti panjang
                @endcomponent
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5M1Q1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXVN" crossorigin="anonymous"></script>
    </body>
</html>