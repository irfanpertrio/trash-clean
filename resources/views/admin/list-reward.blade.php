<div class="col-12 mb-3">
    <a class="w-100" href="{{ '/admin/reward/' . $reward->id }}">
        <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body d-flex">
                <form style="width: 100%;" action="" method="post">
                    @csrf
                    <div class="row text-start d-flex align-items-center">
                        <div class="col-4 text-center">
                            <img class="img-fluid"
                                src="{{ asset('storage/uploads/reward/' . $reward->reward->gambar) }}" alt="User"
                                style="width: 100px; border-radius: 10px;">
                        </div>

                        <div class="col-8 form-group">
                            <p class="mb-1">{{ $reward->reward->nama }}</p>
                            <p class="mb-1 text-secondary">{{ $reward->jumlah }} <small>{{ $reward->status }}</small>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </a>
</div>
