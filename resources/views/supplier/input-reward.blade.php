@php
    $title = 'Jumlah';
    $form_action = '/super_admin/update-admin';
    $right_button = 'Tukar';
@endphp

<div class="row d-flex justify-content-center">


    <form class="mx-1 mx-md-4" action="{{ $form_action }}" method="post">
        @csrf
        <div class="row justify-content-center d-flex align-items-center">

            @if ($errors->any())
                <div class="alert alert-danger alert-block d-flex justify-content-between align-items-center">

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                    <button class="btn close" data-dismiss="alert" type="button">×</button>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block d-flex justify-content-between align-items-center">
                    <strong>{{ $message }}</strong>
                    <button class="btn close" data-dismiss="alert" type="button">×</button>
                </div>
            @endif

            <div class="col-12 mt-4">
                <div class="mb-3 row">
                    <label class="col-sm-5 col-form-label" for="staticEmail">Jumlah TrashCoin</label>
                    <div class="col-sm-6">
                        <input class="form-control-plaintext" id="staticEmail" type="text"
                            value="{{ $koin }}" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-5 col-form-label" for="staticEmail">Jumlah Dana</label>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <input class="form-control" name="jumlah" type="number" max="{{ $koin }}"
                                maxlength="2" placeholder="{{ $koin }}" />
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="d-flex justify-content-center col-10 my-3">
            <button class="btn btn-primary btn-lg " type="submit">{{ $right_button }}</button>
        </div>
    </form>
</div>
