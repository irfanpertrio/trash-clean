<div class="row d-flex justify-content-center mb-3 ">
    <div class="col-lg-12 col-xl-12">
        <div class="card text-black" style="border-radius: 25px;">

            <div class="card-body">
                <div class="row text-start d-flex align-items-center justify-content-center">
                    <div class="col-2 text-center">
                        <img class="img-fluid" src="{{ asset('storage/uploads/reward/' . $reward->gambar) }}"
                            alt="Tutorial" style="width: 100px; border-radius: 10px;">
                    </div>

                    <div class="col-6 form-group">
                        <p class="mb-1">{{ $reward->nama }}</p>

                        @if ($reward->kategori != 'ewallet')
                            <p class="mb-1 text-muted">Stock: {{ $reward->jumlah }}</p>
                        @endif

                    </div>
                    <div class="col-4 form-group">
                        <a href="{{ '/super_admin/reward/' . $reward->id }}" class="btn btn-primary w-100">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
