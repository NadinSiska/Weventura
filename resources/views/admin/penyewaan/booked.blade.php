@extends('layouts.admin')

@section('title', 'Booked List')

@section('content')



    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="proposalList">
                                <thead>
                                    <tr>
                                        <th>Invoice</th>
                                        <th>Nama Penyewa</th>
                                        <th>Nama Barang</th>
                                        <th>Total Biaya</th>
                                        <th>Tanggal Sewa</th>
                                        <th>Durasi Sewa</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Foto Identitas</th>
                                        <th>Status</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penyewaan as $sewa)
                                        <tr class="single-item">
                                            <td><a href="javascript:void(0);" class="fw-bold">{{ $sewa->invoice }}</a></td>
                                            <td>
                                                <a href="javascript:void(0)" class="hstack gap-3">
                                                    <div>
                                                        <span class="text-truncate-1-line">{{ $sewa->nama_penyewa }}</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#itemModal{{ $sewa->id_sewa }}">
                                                    See Item
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal" id="itemModal{{ $sewa->id_sewa }}" tabindex="-1"
                                                    aria-labelledby="itemModalLabel{{ $sewa->id_sewa }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="itemModalLabel{{ $sewa->id_sewa }}">Item Details for {{ $sewa->nama_barang }}</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Add your item details here -->
                                                                <p>Details about the item...</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fw-bold text-dark">Rp
                                                {{ number_format($sewa->total_biaya, 0, ',', '.') }}</td>
                                            <td>{{ $sewa->tanggal_sewa }}</td>
                                            <td>{{ $sewa->durasi_sewa }}</td>
                                            <td>{{ $sewa->tanggal_kembali }}</td>
                                            <td>
                                                @if ($sewa->foto_identitas)
                                                    <img src="{{ asset('storage/identitas/' . $sewa->foto_identitas) }}"
                                                        alt="ID" width="50">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                @if ($sewa->status == 0)
                                                    <div class="badge bg-soft-warning text-warning">Pending</div>
                                                @elseif($sewa->status == 1)
                                                    <div class="badge bg-soft-success text-success">Approved</div>
                                                @elseif($sewa->status == 2)
                                                    <div class="badge bg-soft-info text-info">Currently Rented</div>
                                                @elseif($sewa->status == 3)
                                                    <div class="badge bg-soft-primary text-primary">Returned</div>
                                                @else
                                                    <div class="badge bg-soft-danger text-danger">Rejected</div>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    @if ($sewa->status == 1)
                                                        <!-- Approved -->
                                                        <form action="{{ route('admin.booking.start', $sewa->id_sewa) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            <button type="submit" class="avatar-text avatar-md bg-success"
                                                                title="Start Rental">
                                                                <i class="feather feather-check text-light"></i>
                                                            </button>
                                                        </form>
                                                        <form action="{{ route('admin.booking.delete', $sewa->id_sewa) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            <button type="submit" class="avatar-text avatar-md bg-danger"
                                                                title="Delete">
                                                                <i class="feather feather-trash text-light"></i>
                                                            </button>
                                                        </form>
                                                    @elseif($sewa->status == 2)
                                                        <!-- Currently Rented -->
                                                        <form action="{{ route('admin.booking.return', $sewa->id_sewa) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            <button type="submit" class="avatar-text avatar-md bg-primary"
                                                                title="Mark as Returned">
                                                                <i class="feather feather-rotate-cw text-light"></i>
                                                            </button>
                                                        </form>
                                                    @elseif($sewa->status == 3)
                                                        <!-- Returned -->
                                                        <form action="{{ route('admin.booking.delete', $sewa->id_sewa) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            <button type="submit" class="avatar-text avatar-md bg-danger"
                                                                title="Delete">
                                                                <i class="feather feather-trash text-light"></i>
                                                            </button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- [ Main Content ] end -->
    </div>
@endsection
