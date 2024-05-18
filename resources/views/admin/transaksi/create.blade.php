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
            <h2>Form Pelanggan</h2>

            <form action="{{ route('transaksi.store') }}" method="post">
                @csrf
                {{-- <div class="form-group">
      <label for="id_detail_servis">ID Detail Servis:</label>
      <input type="text" class="form-control" id="id_detail_servis" name="id_detail_servis" required>
    </div> --}}
                <div class="form-group">
                    <label for="id_pelanggan">Id Pelanggan:</label>
                    <select name="id_pelanggan" class="form-control" id="id_pelanggan">
                        @foreach ($pelanggan as $plx)
                            <option value="{{ $plx->id_pelanggan }}">{{ $plx->nama_pelanggan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="model">Nama Barang:</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                </div>
                <div class="form-group">
                    <label for="tgl_terima">Tanggal Terima:</label>
                    <input type="date" class="form-control" id="tanggal_terima" name="tgl_terima" required>
                </div>
                <div class="form-group">
                    <label for="tgl_ambil">Tanggal Ambil:</label>
                    <input type="date" class="form-control" id="tanggal_ambil" name="tgl_ambil" required>
                </div>
                <div class="form-group">
                    <label for="model">masalah:</label>
                    <input type="text" class="form-control" id="masalah" name="masalah" required>
                </div>
                <div class="form-group">
                    <label for="model">Model:</label>
                    <input type="text" class="form-control" id="model" name="model" required>
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan:</label>
                    <textarea class="form-control" id="keluhan" name="keluhan" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="biaya">Biaya:</label>
                    <input type="number" class="form-control" id="biaya" name="biaya" required>
                </div>
                <div class="form-group">
                    <label for="status">Status Servis:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="Pending">Pending</option>
                        <option value="On Progress">On Progress</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @include('partials.footer')
        </div>

        @include('partials.scripts')
</body>

</html>
