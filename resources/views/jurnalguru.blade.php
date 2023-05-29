<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Jurnal Guru</title>
  </head>
  <body>
    <h1 class ="text-center mb-4">Jurnal Harian Guru</h1>

    <div class="container">
        <a href="/tambahdata" type="button" class="btn btn-success">+ Tambah Data</a>
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Pertemuan</th>
                    <th scope="col">Materi Pokok</th>
                    <th scope="col">Kehadiran</th>
                    <th scope="col">Kegiatan Pembelajaran</th>
                    <th scope="col">Penilaian</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $row)
                  <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->tanggal }}</td>
                    <td>{{ $row->kelas }}</td>
                    <td>{{ $row->pertemuan }}</td>
                    <td>{{ $row->materipokok }}</td>
                    <td>{{ $row->kehadiransiswa }}</td>
                    <td>{{ $row->kegiatanpembelajaran }}</td>
                    <td>{{ $row->penilaian }}</td>
                    <td>
                        <button type="button" class="btn btn-danger">Delete</button>
                        <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>