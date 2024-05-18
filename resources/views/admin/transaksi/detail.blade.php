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
            <h3>Detail Barang Servis</h3>
        </div>

        <div class="page-content">
            <section class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="rows">
                           
                            <label for="">Nama Pelanggan</label>
                            <p>{{$detailbarang->nama_barang}}</p>
                            {{-- <label for="">Tanggal Terima</label>
                            <p>{{$detail->tgl_terima}}</p>
                            <label for="">Tanggal Ambil</label>
                            <p>{{$detail->tgl_ambil}}</p>
                            <label for="">Model</label>
                            <p>{{$detail->model}}</p>
                            <label for="">Keluhan</label>
                            <p>{{$detail->keluhan}}</p>
                            <label for="">Masalah</label>
                            <p>{{$detail->masalah}}</p>
                            <label for="">Biaya</label>
                            <p>{{$detail->biaya}}</p>
                            <label for="">Status</label>
                            <p>{{$detail->status}}</p> --}}
                        </div>
                    </div>
                </div>
            </section>
        </div>

        @include('partials.footer')
    </div>

    @include('partials.scripts')
</body>

</html>
