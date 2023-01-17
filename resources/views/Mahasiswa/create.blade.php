@extends('Mahasiswa.layout')

@section('content')

<div class="col-xl-8 col-lg-8 col-md-9 col-11">
    <div class="text-center"><h3>Project Laravel CRUD database MYSQL</h3></div>
    <div class="card shadow-5-strong">
        <div class="card-header">Add Data Mahasiswa</div>
        <form action="{{route('Mahasiswa.store')}}" method="POST" class="card-body form-horizontal p-4">
            @csrf
            <div class="mb-3">
                <label for="Nim" class="form-control-label">Nim</label>
                <input type="number" id="Nim" name="nim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Name" class="form-control-label">Name</label>
                <input type="text" id="Names" name="names" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Born" class="form-control-label">Born</label>
                <input type="date" id="Born" name="born" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Majors" class="form-control-label">Majors</label>
                <select name="majors" id="Majors" class="form-select" required>
                    <option disabled selected>Choose One</option>
                    <option value="Networking">Networking</option>
                    <option value="Programing">Programing</option>
                    <option value="Development">Development</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Address" class="form-control-label">Address</label>
                <input type="text" id="Address" name="address" class="form-control" required>
            </div>
            <button class="btn btn-sm btn-success" name="submit">Kirim</button>
        </form>
    </div>
</div>
@endsection