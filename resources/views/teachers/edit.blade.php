@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('teachers.update', $row) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama Teacher <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name_teachers" value="{{ old('name_teachers', $row->name_teachers) }}" />
            </div>
            <div class="form-group">
                <label>City <span class="text-danger">*</span></label>
                <input class="form-control" type="city" name="city" value="{{ old('city', $row->city) }}" />
            </div>
            <div class="form-group">
                <label>Place of Birth <span class="text-danger">*</span></label>
                <input class="form-control" type="pob" name="pob" />
            </div>
            <div class="form-group">
                <label>Date of Birth <span class="text-danger">*</span></label>
                <input class="form-control" type="dob" name="dob" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ route('user.index') }}">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection