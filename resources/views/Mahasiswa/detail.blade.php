@extends('Mahasiswa.layout')

@section('content')
<div class="col-xl-8 xol-lg-9 col-md-10 col-11">
    <div class="text-center"><h3>Detail Data Mahasiswa Project Laravel</h3></div>
    <div class="mt-4 card bg-grey shadow-5-strong">
        <div class="card-header"><h5>Detail Data Mahasiswa</h5></div>
        <table class="table card-body bg-grey opacity-75">
            <tr>
                <th>Nim</th>
                <td>{{$data->nim}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$data->names}}</td>
            </tr>
            <tr>
                <th>Born</th>
                <td>{{$data->born}}</td>
            </tr>
            <tr>
                <th>Majors</th>
                <td>{{$data->majors}}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{$data->address}}</td>
            </tr>
            <tr>
                <th></th>
                <th><div class="fload-end"><a href="{{route('Mahasiswa.index')}}" class="btn btn-sm btn-success">Back To Home</a></div></th>
            </tr>
        </table>
    </div>
</div>

@endsection