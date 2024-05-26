@extends('layouts.app')

@section('content')
<div class="container">
<h1>Create Warga</h1>
<form action="/warga/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name ="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIK</label>
        <input type="text" name ="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No KK</label>
        <input type="text" name ="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
{{-- <input type="text" name="nama" placeholder="Nama"><br>
<input type="text" name="nik" placeholder="nik"><br>
<input type="text" name="no_kk" placeholder="no kk"><br> --}}
<select class= "form-select" name="jenis_kelamin">
    <option value="">Pilih jenis kelamin</option>
    <option value="L">Laki laki</option>
    <option value="P">Perempuan</option>
</select><br>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
<textarea class="form-control" name="alamat" rows="10"></textarea> <br>
<input type="submit" name = "submit" class= "btn btn-info" value="save">
</div>

</form>
</div>
@endsection

