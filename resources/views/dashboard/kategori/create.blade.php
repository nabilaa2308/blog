@extends('dashboard.layouts.main')

@section('title')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 mb-2 text-gray-800">Kategori Create</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- title -->
                        <div class="form-group">
                            <label for="input_kategori_name" class="font-weight-bold">
                                Nama
                            </label>
                            <input id="input_kategori_name" name="name" type="text" class="form-control"
                                placeholder="Masukkan Nama Kategori" required />
                        </div>
                        {{-- <!-- slug -->
                        <div class="form-group">
                            <label for="input_kategori_slug" class="font-weight-bold">
                                Slug
                            </label>
                            <input id="input_kategori_slug" name="slug" type="text" class="form-control"
                                placeholder="Slug Kategori" readonly />
                        </div> --}}
                        <!-- thumbnail -->
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail</label>
                            <input class="form-control" type="file" id="thumbnail" name="thumbnail" onchange="previewImage()"/>
                            <img class="img-preview img-fluid">
                        </div>

                        <div class="float-right">
                            <a class="btn btn-warning px-4" href="{{ route('kategori.index') }}">Kembali</a>
                            <button type="submit" class="btn btn-primary px-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('css-external')
        <link rel="stylesheet" href="{{ asset('../vendor/select2/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('../vendor/select2/css/select2-bootstrap4.min.css') }}">
    @endpush

    @push('javascript-external')
        <script src="{{ asset('../vendor/select2/js/select2.full.min.js') }}"></script>
        {{-- filemanager --}}
        <script src="{{ asset('../vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    @endpush

    @push('javascript-internal')
        <script>
            $(function() {
                // generateSlug 
                function generateSlug(value) {
                    return value.trim()
                        .toLowerCase()
                        .replace(/[^a-z\d-]/gi, '-')
                        .replace(/-+/g, '-').replace(/^-|-$/g, "");
                }
                // event:input name kategori
                $('#input_kategori_name').change(function() {
                    let name = $(this).val();
                    $('#input_kategori_slug').val(generateSlug(name));
                });  
            });
            function previewImage() {
               const thumbnail = document.querrySelector(#thumbnail);
               const imgPreview = document.querrySelector('.img-preview');

               imgPreview.style.display = 'block';

               const oFReader = new FileReader();
               oFReader.readAsDataURL(thumbnail.files[0]);

               oFReader.onload = function(oFREvent) {
                  imgPreview.src = oFREvent.target.result;
               }
            }
        </script>
    @endpush
@endsection
