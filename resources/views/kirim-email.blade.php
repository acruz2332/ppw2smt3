<div class="row justify-content-center">
    <h3 class="text-center my-2">
        Tutorial queue laravel
    </h3>
    <div class="col-md-4 p-4">
        {{-- send email --}}
        @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{session('status')}}
        </div>
        @endif

        <form action="{{ route('post-email') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="nama">
            </div>
            <div class="form-group my-3">
                <label for="email"> Email Tujuan</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="email tujuan">
            </div>
            <div class="form-group my-3">
                <label for="body">Deskripsi </label>
                <textarea name="body" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Kirim Email</button>
            </div>
        </form>
    </div>
</div>