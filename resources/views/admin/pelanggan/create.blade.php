@include('partials.header')

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        @include('partials.sidebar')
        @include('sweetalert::alert')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

        <div class="page-heading">
            <h3>Tambah Pelanggan</h3>
        </div>
        <div class="page">
        <div class="page-content">
            <form action="{{route("pelanggan.store")}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama_pelanggan">Nama Pelanggan:</label>
                  <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="no_telepon">Nomor Telepon:</label>
                  <input type="number" class="form-control" id="no_telepon" name="no_telepon" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div> 
                
                

        @include('partials.footer')
    </div>

    @include('partials.scripts')
</body>

</html>
