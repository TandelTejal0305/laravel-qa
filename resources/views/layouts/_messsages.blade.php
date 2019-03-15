@if(session('success'))

    <div class="alert alert-success">
        <strong>Success!</strong> {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>
    </div>

@endif