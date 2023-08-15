@extends('admin/layout')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambah Fasilitas Hotel</h4>
          <div class="row">
            <div class="col-md-5">
                <form action="{{ route('fasilitashotel.store') }}" 
                method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                      <label for="usr">Nama Fasilitas :</label>
                      <input type="text" class="form-control" name="fasilitas">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Gambar:</label>
                      <input type="file" class="form-control" name="gambar">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                 
            </div>
            <div class="col-md-7">
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection