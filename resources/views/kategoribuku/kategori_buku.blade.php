<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color: #8f7fb6dd">
      <nav class="navbar bg-body-secondary">
            <div class="container-fluid d-flex justify-content-center">
                <a class="navbar-brand">Buku</a>
            </div>
            </nav>
        <table class="table mt-2" >
        <div class="mt-2 ms-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah
            </button>
        </div>
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Stok</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <div class="dropdown">
            <tr>
            <th scope="row">1</th>
            <td><img class="card-img-bottom img-fluid" style="width: 15rem;" src="{{asset('haikyu.jpg')}}" alt="Card image cap" style="height: 15rem; object-fit:cover;"></td>
            <td>Haikyu</td>
            <td>Haruichi Furudate</td>
            <td>06-10-2006</td>
            <td>100</td>
             <td>  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-secondary">Show</button>
            </div>
            </td>
            </tr>
        </tbody>
           <!-- Modal -->
           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori Buku</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="was-validated">
                <div class="mb-3">
                        <input type="file" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    <div class="mb-3">
                    <label for="Name" class="form-label">Judul</label>
                    <input type="text" name="name" class="form-control" id="Name" placeholder="Masukkan Judul">
                    </div>

                    <div class="mb-3">
                    <label for="Name" class="form-label">Penulis</label>
                    <input type="text" name="name" class="form-control" id="Name" placeholder="Masukkan Nama Penulis">
                    </div>
                    <div class="mb-3">
                    <label for="Name" class="form-label">Tahun Terbit</label>
                    <input type="number" name="name" class="form-control" id="Name" placeholder="00-00-0000">
                    </div>
                   
                    <div class="mb-3">
                    <label for="Name" class="form-label">Stok</label>
                    <input type="number" name="name" class="form-control" id="Name" placeholder="100">
                    </div>
                   

                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Tambah</button>
                </div>
                    </form>
                </div>
            </div>
            </div>
        </table>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>