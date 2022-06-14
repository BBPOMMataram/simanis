@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Upload Dokumen</div>
                    <div class="card-body">
                        <form action="#">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Ketik nama dokumen">
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="" selected>==Select Kategori==</option>
                                    @foreach($dataMenu as $item)
                                        @unless($item->isParent)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endunless
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="files">Upload</label>
                                <input type="file" class="form-control" id="files" name="files[]" multiple>
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
