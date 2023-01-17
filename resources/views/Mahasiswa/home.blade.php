@extends('Mahasiswa.layout')

@section('content')
<div class="col-xl-12 col-lg-8 col-md-9 col-11">
    <div class="text-center mb-4 "><h3>Project Laravel CRUD database MYSQL</h3></div>

    <div class="table-responsive">
            <div class="g-3 ms-2 float-end">
            <form action="{{route('Mahasiswa.index')}}" method="GET">
                <input type="search" name="search" class="form-control">
            </form>
            </div>
            <a href="{{route('Mahasiswa.create')}}" class="btn btn-info float-end">Tambah Data</a>
            
    <table class="table table-hover table-black">
        <thead>
            <th scope="col">No</th>
            <th scope="col">Nim</th>
            <th scope="col">Name</th>
            <th scope="col">Born</th>
            <th scope="col">Majors</th>
            <th scope="col">Address</th>
            <th scope="col">Handle</th>
        </thead>
         
        @foreach ($data as $no => $row)
        <tbody>
            <td>{{$no + $data->firstItem()}}</td>
            <td>{{$row->nim}}</td>
            <td>{{$row->names}}</td>
            <td>{{$row->born}}</td>
            <td>{{$row->majors}}</td>
            <td>{{$row->address}}</td>
            <td>
                <form action="{{route('Mahasiswa.destroy',$row->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('Mahasiswa.show',$row->id)}}" class="btn btn-sm btn-info">detail</a>
                <a href="{{route('Mahasiswa.edit',$row->id)}}" class="btn btn-sm btn-warning">update</a>
                <button type="submit" class="btn btn-sm btn-danger">delete</button>
                </form>
            </td>
        </tbody>
        @endforeach
   
    </table>
   
</div>
</div>
</div>

{{$data->links()}}

@endsection