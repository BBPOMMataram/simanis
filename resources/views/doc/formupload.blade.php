@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
            @endif

            @if(session()->has('msg'))
            <div class="alert alert-success">{{ session()->get('msg') }}</div>
            @endif
            <div class="card">
                <div class="card-header">Upload Dokumen</div>
                <div class="card-body">
                    <form action="{{ route('doc.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Ketik nama dokumen">
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-select" aria-label="Default select example" name="kategori">
                                <option value="" selected>==Select Kategori==</option>
                                @foreach($dataMenu as $item)
                                    @unless($item->isParent)
                                        <option value="{{ $item->id }}" @if(old('kategori')==$item->id) selected @endif>{{ $item->name }}</option>
                                    @endunless
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="docs" name="docs[]">
                        </div>
                        <div class="mb-3">
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
