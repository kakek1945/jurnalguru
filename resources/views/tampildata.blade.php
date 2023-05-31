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
    <h1 class ="text-center mb-4">Edit Jurnal Harian</h1>

    <div class="container">
      <div class="row">
        <div class="card">
          <div class="class-body">
<<<<<<< HEAD
            <form action="/insertdata" method="GET" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
=======
            <form action="" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                <input type="date" value="{{ $data->tanggal }}" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
>>>>>>> 36a2dd794edd058df5d54a9e01479d6bdcb158c9
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kelas</label>
                <select class="form-select" name="kelas" aria-label="Default select example">
<<<<<<< HEAD
=======
                  </option selected >{{ $data->jeniskelamin }}</option>
>>>>>>> 36a2dd794edd058df5d54a9e01479d6bdcb158c9
                  <option value="VII">VII</option>
                  <option value="VIII">VIII</option>
                  <option value="IX">IX</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pertemuan</label>
<<<<<<< HEAD
                <input type="number" name="pertemuan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Materi Pokok</label>
                <input type="text" name="materipokok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kehadiran Siswa</label>
                <input type="text" name="kehadiransiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama(a/s/i)">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kegiatan Pembelajaran </label>
                <textarea class="form-control" name="kegiatanpembelajaran" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Penilaian</label>
                <input type="text" name="penilaian" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
=======
                <input type="number" name="pertemuan" value="{{ $data->pertemuan }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Materi Pokok</label>
                <input type="text" name="materipokok" value="{{ $data->materipokok }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kehadiran Siswa</label>
                <input type="text" name="kehadiransiswa" value="{{ $data->kehadiransiswa }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama(a/s/i)">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kegiatan Pembelajaran </label>
                <!-- <textarea class="form-control" name="kegiatanpembelajaran" id="exampleFormControlTextarea1" rows="3"></textarea> -->
                <input type="text" name="kehadiransiswa" value="{{ $data->kegiatanpembelajaran }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama(a/s/i) row="3" >
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Penilaian</label>
                <input type="text" name="penilaian" value="{{ $data->penilaian }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
>>>>>>> 36a2dd794edd058df5d54a9e01479d6bdcb158c9
              </div>
             
              <div class="mb-3">
              <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
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