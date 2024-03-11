<div class="row d-flex justify-content-center mb-3 ">
    <div class="col-lg-12 col-xl-12">
        <div class="card text-black" style="border-radius: 25px;">

            <div class="card-body">
                <div class="row text-start d-flex align-items-center justify-content-center">
                    <div class="col-2 text-center">
                        <img class="img-fluid"
                            src="{{ asset('storage/uploads/media-informasi/' . $media_informasi->gambar) }}"
                            alt="Media Informasi" style="width: 100px; border-radius: 10px;">
                    </div>

                    <div class="col-6 form-group">
                        <p class="mb-1">{{ $media_informasi->judul }}</p>
                    </div>
                    <div class="col-4 form-group">
                        <a class="btn btn-primary w-100"
                            href="{{ '/super_admin/media-informasi/' . $media_informasi->id }}">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
