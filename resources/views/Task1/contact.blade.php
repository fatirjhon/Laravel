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
<div class="form-group row">
  <label for="example-email" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="text" id="example-text-input">
  </div>
</div>

  <div class="form-group row">
    <label for="exampleTextarea" class="col-2 col-form-label">Messages</label>
    <textarea class="form-control" id="exampleTextarea" rows="8"></textarea>
  </div>

<button type="submit" class="btn btn-primary">Submit</button>

@endsection