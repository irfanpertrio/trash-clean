<div class="card">
    <div class="card-header">
        <h5 class="text-center my-2">Konten Landing Page</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <form class="row" action="{{ '/' . Auth::user()->role . '/update-konten' }}" method="post">
                @csrf
                <div class="form-group mb-4">
                    <label for="exampleFormControlInput1">
                        <h6>Judul Home Screen</h6>
                    </label>
                    <input class="form-control" id="exampleFormControlInput1" name="judul_halaman_awal" type="text"
                        value="{{ $post->judul_halaman_awal }}" placeholder="judul content">
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlTextarea1">
                        <h6>Text Home Screen</h6>
                    </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="konten_halaman_awal" rows="5">{{ $post->konten_halaman_awal }}</textarea>
                </div>
                <hr>
                <div class="form-group mb-4">
                    <label for="exampleFormControlInput1">
                        <h6>Judul About Us</h6>
                    </label>
                    <input class="form-control" id="exampleFormControlInput1" name="judul_tentang" type="text"
                        value="{{ $post->judul_tentang }}" placeholder="judul content">
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlTextarea1">
                        <h6>Text About Us</h6>
                    </label>
                    <textarea class="form-control" id="editor1" name="konten_tentang" rows="5">{{ $post->konten_tentang }}</textarea>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                </div>
                <hr>
                <div class="form-group mb-4">
                    <label for="exampleFormControlInput1">
                        <h6>Katalog bahan organik</h6>
                    </label>
                    <textarea class="form-control" id="editor2" name="katalog_bahan_organik" rows="4">{{ $post->katalog_bahan_organik }}</textarea>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlTextarea1">
                        <h6>Katalog bahan anorganik</h6>
                    </label>
                    <textarea class="form-control" id="editor3" name="katalog_bahan_anorganik" rows="4">{{ $post->katalog_bahan_anorganik }}</textarea>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlTextarea1">
                        <h6>Katalog bahan b3</h6>
                    </label>
                    <textarea class="form-control" id="editor4" name="katalog_bahan_b3" rows="4">{{ $post->katalog_bahan_b3 }}</textarea>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
