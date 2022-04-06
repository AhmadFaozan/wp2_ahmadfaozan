@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Corona Virus Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('books.update', $books->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="judul">Judul:</label>
              <input type="text" class="form-control" name="judul" value="{{ $books->judul }}"/>
          </div>
          <div class="form-group">
              <label for="deskripsi">deskripsi :</label>
              <textarea rows="5" columns="5" class="form-control" name="deskripsi">{{ $books->deskripsi }}</textarea>
          </div>
          <div class="form-group">
              <label for="terbit">Terbit :</label>
              <input type="text" class="form-control" name="terbit" value="{{ $books->terbit }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection