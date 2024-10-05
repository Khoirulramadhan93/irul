<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/mesin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="justify-content-center">
            <div class="col">
                <h1 class="mt-4">Tambah Sparepart</h1>
                <form action="/post" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-2">
                      <label for="exampleInputEmail1" class="form-label">Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
                    </div>
                    <div class="mb-3 mt-2">
                      <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="deskripsi">
                    </div>
                    <div class="mb-3 mt-2">
                      <label for="exampleInputEmail1" class="form-label">Gambar</label>
                      <input type="file" class="form-control" accept="jpg.jpeg.image/png.image/jpeg" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </form>
            </div>
        </div>
    </div>
    


</body>
</html>