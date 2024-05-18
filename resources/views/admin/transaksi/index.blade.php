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
            <h3>Tampilkan Transaksi</h3>
        </div>

        <div class="page"> 
                <div class="page-content">
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    Simple Datatable
                                </h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Nama Pelanggan</th>
                                            <th>Nama Barang</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($barangservis as $brg)
                                        <tr>
                                            <td>{{$brg->pelanggan->nama_pelanggan}}</td>
                                            <td>{{$brg->nama_barang}}</td>
                                            <td>
                                                <a href="{{route('transaksi.show', ['id'=> $brg->id_servis])}}" class="buttons btn btn-success">Detail</a>
                                            </td>

                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                
                    </section>
                </div>
        </div>
        </div>

        @include('partials.footer')
    </div>

    @include('partials.scripts')
<script src="{{asset("assets/extensions/simple-datatables/umd/simple-datatables.js")}}"></script>
<script src="{{asset("assets/static/js/pages/simple-datatables.js")}}"></script>
</body>

</html>
