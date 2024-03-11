@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show alert-block">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        <button class="btn-close" data-bs-dismiss="alert" type="button"></button>
    </div>
@endif
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show alert-block">
        <strong>{{ $message }}</strong>
        <button class="btn close" data-bs-dismiss="alert" type="button"></button>
    </div>
@endif
