<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="{{url('css/topnav.css')}}"> 
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="{{ route('buku.index') }}">Buku</a>
  <a href="{{ route('buku.index') }}">Input</a>
  <a href="#about">About</a>
</div>

<div style="padding-left:16px">
<h1>Category Detail</h1>
{{$category->name}}
</div>
<table class="table">
  <tr>
    <th>Judul</th>
    <th>Penulis</th>
  </tr>
  @forelse ($category->buku as $buku)
  <tr>
    <td>{{ $buku-> title }}</td>
    <td>{{ $buku-> author }}</td>
  </tr>
  @empty
        Data Belum Tersedia
    @endforelse
</table>
</body>
</html>