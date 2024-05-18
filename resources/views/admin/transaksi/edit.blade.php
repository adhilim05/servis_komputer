@include('partials.header')

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        @include('partials.sidebar')

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

        <div class="page-heading">
            <h3>Tambah Transaksi</h3>
        </div>

        <div class="page">
                <div class="page-content">
                   <form action="#">
                    <label for="tambah_transaksi">Tambah Transaksi</label>
                    <input type="text" name="tambah_transaksi" class="form-control" placeholder="tambah_transaksi">
                    <button type="submit" class="mt-3 btn btn-primary">Simpan</button>
                   </form>
                </div>
        </div>

        @include('partials.footer')
    </div>

    @include('partials.scripts')
</body>

</html>
