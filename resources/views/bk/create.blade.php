@extends('welcome')

@section('bk')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add BK</h1> 
</div>
<div class="col-lg-8">
    <form method="post" action="/bk" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama BK</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" 
          name="nama" required autofocus value="{{ old('nama') }}">
          @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori BK</label>
<<<<<<< HEAD
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Wajib">
                <label class="form-check-label" for="sir">Wajib</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Tidak Wajib">
                <label class="form-check-label" for="lady">Tidak Wajib</label>
            </div>
            {{-- <div class="checkbox">
=======
            <div class="checkbox">
>>>>>>> f36b77c (Upload crud)
                <label><input type="checkbox" id="kategori" name="kategori" value="Wajib">Wajib</label>
              </div>
            <div class="checkbox">
                <label><input type="checkbox" id="kategori" name="kategori" value="Tidak Wajib">Tidak Wajib</label>
<<<<<<< HEAD
              </div> --}}
=======
              </div>
>>>>>>> f36b77c (Upload crud)
            {{-- <label class="checkbox"><input type="checkbox" id="kategori" name="kategori" value="Wajib">Wajib</label>
            <label class="checkbox"><input type="checkbox" id="kategori" name="kategori" value="Wajib"value="Tidak Wajib">Tidak Wajib</label> --}}
            {{-- <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" 
            name="kategori" required value="{{ old('kategori') }}">
            @error('kategori')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror --}}
        </div>
        <div class="mb-3">
            <label for="referensi" class="form-label">Referensi BK</label>
            <input type="text" class="form-control @error('referensi') is-invalid @enderror" id="referensi" 
            name="referensi" required value="{{ old('referensi') }}">
            @error('referensi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>


        <button type="submit" class="btn btn-success">Add BK</button>
        <a class="btn btn-danger" href="/bk">Back</a>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/news/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        
        imgPreview.style.display = "block";
        
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection

