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
            <h3>Kelola Pelangan</h3>
        </div>

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
                                    <th>Nama Pelanggan/th>
                                    <th>Email</th>
                                    <th>Nomor Telepon</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($pelanggan as $pln)
                            <tr>
                                <td>{{$pln->nama_pelanggan}}</td>
                                <td>{{$pln->email}}</td>
                                <td>{{$pln->no_telepon}}</td>
                            </tr>
                            @endforeach
                                
    
                            </tbody>
                        </table>
                    </div>
                </div>
        
            </section>
        </div>

        @include('partials.footer')
    </div>

    @include('partials.scripts')
</body>

</html>
