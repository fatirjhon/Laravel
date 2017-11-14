@extends('Task1.layout')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-3">
      <h2>Riku</h2>
      <h2>Kiranatama</h2>
<img src="img/face.jpg" width="200" height="200" class="img-circle"  alt="muka">
</div>
    
    <div class="col-md-9">
      <div class="row">
      <table class="table table-striped">
    <tbody>
    <tr>
      <th scope="row">Nama</th>
      <td>Riku Kirantama</td>
    </tr>
    <tr>
      <th scope="row">Tempat, Tanggal Lahir</th>
      <td>Bandung, 7 Oktober 1989</td>
    </tr>
    <tr>
      <th scope="row">Jenis Kelamin</th>
      <td>Pria</td>
    </tr>
    <tr>
      <th scope="row">Alamat Domisili</th>
      <td>Jl. Soekarno Hatta No. 104</td>
    </tr>
    </tbody>
    </table>
    </div>

@endsection