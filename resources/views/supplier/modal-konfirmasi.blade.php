<div class="modal fade" id="modal-konfirmasi" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
            </div>
            <form action="/supplier/products/store" method="POST">
                @csrf
                <div class="modal-body">
                    <p>Apakah penukaran anda <strong>sudah benar?</strong></p>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Batal</button>
                    <button class="btn btn-primary" type="submit">Sudah</button>
                </div>
            </form>
        </div>
    </div>
</div>
