<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .table thead {
            background-color: #e0e0e0;
        }

        .table th {
            color: #333;
        }

        h2 {
            font-weight: 600;
        }

        .btn-custom {
            border-radius: 6px;
            font-size: 14px;
        }

        .card {
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="text-dark">Data Barang</h2>
        <a href="{{ route('barang.create') }}" class="btn btn-primary btn-sm btn-custom">+ Tambah</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <table id="datatable" class="table table-striped table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>ID</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                        <tr>
                            <td class="text-center">{{ $barang->id }}</td>
                            <td>{{ $barang->kode }}</td>
                            <td>{{ $barang->nama }}</td>
                            <td>{{ 'Rp ' . number_format($barang->harga, 2, ',', '.') }}</td>
                            <td class="text-center">{{ $barang->stok }}</td>
                            <td class="text-center">
                                <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning btn-sm btn-custom me-1">Edit</a>
                                <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" class="d-inline" onsubmit="return confirmDelete(event)">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm btn-custom">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Nonaktifkan pagination Laravel karena pakai DataTables --}}
        </div>
    </div>
</div>

<script>
    function confirmDelete(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Hapus Data?',
            text: "Data akan terhapus permanen.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya, hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                e.target.submit();
            }
        });
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json'
            }
        });
    });
</script>

</body>
</html>
