<div class="row d-flex justify-content-center align-items-center mb-3 ">
    <div class="col-12">

        <a href="/admin/notification/antar/{{ $user[$key]->id }}">

            <div class="card text-black" style="border-radius: 25px;">

                <div class="card-body p-4">

                    <div class="row d-flex align-items-center justify-content-start">

                        <div class="col-2 text-center">
                            <img class="img-fluid" src="{{ asset('storage/uploads/profil/' . Auth::user()->foto) }}"
                                alt="Generic placeholder image" style="width: 100px; border-radius: 10px;">
                        </div>

                        <div class="col-10">
                            <p class="mb-1 h6">{{ $user[$key]->nama }}</p>
                            <small class="mb-2 pb-1" style="color: #2b2a2a;">{{ count($item) }} Request {{ $item[0]->status_barang }}
                            </small>
                            <input name="status_barang" type="text" value="valid" hidden>
                            <input name="user_id" type="text" value="{{ $user[$key]->id }}" hidden>
                        </div>

                    </div>

                </div>

            </div>

        </a>

    </div>

</div>
