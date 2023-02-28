@extends('welcome')
 
@section('bk')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="/bk/create"> Create New BK</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-striped table-sm">
        <tr>
            <th>No</th>
            <th>Kode BK</th>
            <th>Nama BK</th>
            <th>Kategori</th>
            <th>Referensi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bk as $book)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>BK{{ $book->id }}</td>
            <td>{{ $book->nama }}</td>
            <td>{{ $book->kategori }}</td>
            <td>{{ $book->referensi }}</td>
            <td>
                
                <a class="btn btn-info" href="/bk/{{ $book->id }}">Show</a>
                <a class="btn btn-primary" href="/bk/{{ $book->id }}/edit">Edit</a>
                {{-- <a class="btn btn-primary" href="/bk/{{ $book->id }}">Edit</a> --}}
                <form action="/bk/{{ $book->id }}" method="POST" class="d-inline">
                    @method('DELETE')   
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus BK?')">
                        <span data-feather='x-circle'></span> Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="text-center">
    </div>
  
@endsection