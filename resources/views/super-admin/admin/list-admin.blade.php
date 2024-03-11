<div class="row d-flex justify-content-center mb-3 ">
    <div class="col-lg-12 col-xl-12">
        <div class="card text-black" style="border-radius: 25px;">

            <div class="card-body d-flex">
                <form style="width: 100%;" action="" method="post">
                    @csrf
                    <div class="row text-start d-flex align-items-center">
                        <div class="col-2 text-center">
                            <img class="img-fluid" src="{{ asset('storage/uploads/profil/' . $user->foto) }}"
                                alt="User" style="width: 100px; border-radius: 10px;">
                        </div>

                        <div class="col-6 form-group">
                            <p class="mb-1">{{ $user->nama }}</p>
                        </div>
                        <div class="col-4 form-group">
                            <a href="{{ '/super_admin/admin/' . $user->id }}" class="btn btn-primary w-100"
                                >Edit</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
