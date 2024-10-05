<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mesin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/mesin.css">

</head>
<body>
    <section>
        <header>
            <h2> <a href="#" class="logo">OttoDs</a></h2>
            <div class="navigation">
      <a href="/home">Home</a>
      <a href="/mesin">Mesin</a>
      <a href="/kaki">Kaki</a>
      <a href="/dashboard">Dashboard</a>
      <a href="/bengkel">Bengkel</a>
            </div>
        </header>
    

        
        <button><a href="/tambah" type="button" class="btn">Tambah Sparepart</a></button>


        @foreach ($posts as $post)
        <div class="wrapper" style="margin-top: 100px">
            <img src="{{ $post->image }}" alt="">
            <div class="text-box text-black">
                <h2>{{ $post->title }}</h2>
                <p> {{ $post->deskripsi }}</p>    
            </div>
        </div>
        <button><a href="/delete/{{ $post->id }}" class="btn">Hapus</a></button>
        @endforeach

</body>
</html>