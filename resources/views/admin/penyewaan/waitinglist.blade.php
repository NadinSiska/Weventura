@extends('layouts.admin')

@section('title', 'Waiting List')

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
                                            <th>Tanggal Sewa</th>
                                            <th>Durasi Sewa</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Total Biaya</th>
                                            <th>Foto Identitas</th>
                                            <th>Status</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($penyewaan as $sewa)
                                        <tr class="single-item">
                                            <td><a href="javascript:void(0);" class="fw-bold">{{ $sewa->invoice }}</a></td>
                                            <td>
                                                <a href="javascript:void(0)" class="hstack gap-3">
                                                    <div>
                                                        <span class="text-truncate-1-line">{{ $sewa->nama_penyewa }}</span>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>{{ $sewa->tanggal_sewa }}</td>
                                            <td>{{ $sewa->durasi_sewa }}</td>
                                            <td>{{ $sewa->tanggal_kembali }}</td>
                                            <td class="fw-bold text-dark">Rp {{ number_format($sewa->total_biaya, 0, ',', '.') }}</td>
                                            <td>
                                                @if($sewa->foto_identitas)
                                                    <img src="{{ asset('storage/identitas/'.$sewa->foto_identitas) }}" alt="ID" width="50">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                @if($sewa->status == 0)
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
                                                    <form action="{{ route('admin.booking.approve', $sewa->id_sewa) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="avatar-text avatar-md bg-success">
                                                            <i class="feather feather-check text-light"></i>
                                                        </button>
                                                    </form>
                                                    @if($sewa->status == 4) <!-- Rejected -->
                                                        <form action="{{ route('admin.booking.delete', $sewa->id_sewa) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="avatar-text avatar-md bg-danger">
                                                                <i class="feather feather-trash-2 text-light"></i>
                                                            </button>
                                                        </form>
                                                    @else
                                                        <form action="{{ route('admin.booking.reject', $sewa->id_sewa) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="avatar-text avatar-md bg-danger">
                                                                <i class="feather feather-x text-light"></i>
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
