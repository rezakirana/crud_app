@extends('layouts.app')

@section('content')
<div class="container">
<h1>Edit Warga</h1>

<form action="/warga/{{$warga->id}}" method="POST">
    @method('put')
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name ="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->nama}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIK</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->nik}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No KK</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->no_kk}}">
          </div>
    <select class= "form-select" name="jenis_kelamin">
        <option value="">Pilih jenis kelamin</option>
        <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki laki</option>
        <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat" rows="10">{{$warga->alamat}}</textarea> <br>
    <input type="submit" name = "submit" class= "btn btn-info" value="Update">
    </div>

    </form>

</div>

@endsection
