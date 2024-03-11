<div class="dropdown">
    <button class="btn btn-sm btn-primary" type="button">Tambah Sampah
        Baru <i class="bi bi-plus-circle"></i></button>

    <ul>
        <li>
            <!-- Button trigger modal -->
            <button class="btn" data-bs-toggle="modal" data-bs-target="#modal-jemput" type="button">
                Jemput
            </button>
        </li>
        <li>
            <!-- Button trigger modal -->
            <button class="btn" data-bs-toggle="modal" data-bs-target="#modal-antar" type="button">
                Antar Sendiri
            </button>
        </li>
    </ul>

    <!-- Modal -->
    <div class="modal fade" id="modal-antar" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Antar Sampah</h5>
                    <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                </div>
                <form action="/supplier/products/store" method="POST">
                    @csrf
                    <div class="modal-body">
                        <p>Silahkan bawa sampah anda ke alamat di bawah ini.
                            Mohon ceklis pada tempat sampah yang <strong>sudah penuh:</strong></p>
                        <div class="row d-flex align-items-center">
                            <div class="col-12">

                                <div class="form-check">
                                    <input class="form-check-input" id="organik" name="organik" type="checkbox"
                                        value="1">
                                    <label class="form-check-label" for="organik">
                                        Organik
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="anorganik" name="anorganik" type="checkbox"
                                        value="1">
                                    <label class="form-check-label" for="anorganik">
                                        Anorganik
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="B3" name="B3" type="checkbox"
                                        value="1">
                                    <label class="form-check-label" for="B3">
                                        B3
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex align-items-center mt-4">
                            <div class="col m-auto">
                                <iframe class="mb-4 mb-lg-0"
                                    src="https://maps.google.com/maps?q=2CFX+RHF,%20Unnamed%20Road,%20Jejerukkrajan,%20Jejeruk,%20Kec.%20Blora,%20Kabupaten%20Blora,%20Jawa%20Tengah%2058219&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    style="border:0; width: 100%; height: 200px;" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input name="status" type="text" value="diantar" hidden>
                        <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Batal</button>
                        <button class="btn btn-primary" type="submit">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-jemput" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog">



            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jemput Sampah</h5>
                    <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                </div>
                <form action="/supplier/products/store" method="POST">
                    @csrf
                    <div class="modal-body">
                        <p>Sampah akan segera dijemput oleh petugas.
                            Mohon ceklis pada tempat sampah yang <strong>sudah penuh:</strong></p>
                        <div class="row d-flex align-items-center">
                            <div class="col-12">

                                <div class="form-check">
                                    <input class="form-check-input" id="organik" name="organik" type="checkbox"
                                        value="1">
                                    <label class="form-check-label" for="organik">
                                        Organik
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="anorganik" name="anorganik" type="checkbox"
                                        value="1">
                                    <label class="form-check-label" for="anorganik">
                                        Anorganik
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="B3" name="B3" type="checkbox"
                                        value="1">
                                    <label class="form-check-label" for="B3">
                                        B3
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input name="status" type="text" value="menunggu dijemput" hidden>
                        <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Batal</button>
                        <button class="btn btn-primary" type="submit">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
