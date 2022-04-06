@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="" style="margin: 10px;">
  <a href="{{route('books.create')}}"><button type="button" class="btn btn-primary">Add Books</button></a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Judul</td>
          <td>Deskripsi</td>
          <td>Terbit</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $case)
        <tr>
            <td>{{$case->id}}</td>
            <td>{{$case->judul}}</td>
            <td>{{$case->deskripsi}}</td>
            <td>{{$case->terbit}}</td>
            <td><a href="{{ route('books.edit', $case->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('books.destroy', $case->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection