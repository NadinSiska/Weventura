@extends('layouts.admin')

@section('title', 'Item Stock')

@section('content')
<!-- [ Main Content ] start -->
<div class="main-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card stretch stretch-full">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover" id="customerList">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Harga per hari</th>
                                    <th>Stok</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                    <tr class="single-item">
                                    <td>
                                        <div>
                                            <span class="text-truncate-1-line">{{ $item->nama_barang }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->stok_barang }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>
                                        <select class="form-select form-control" data-select2-selector="category">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id_kategori }}" {{ $item->id_kategori == $category->id_kategori ? 'selected' : '' }}>
                                                    {{ $category->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        @if($item->stok_barang > 0)
                                            <div class="badge bg-soft-success text-success">Available</div>
                                        @else
                                            <div class="badge bg-soft-warning text-warning">Not Available</div>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="hstack gap-2 justify-content-end">
                                            <a href="#" class="avatar-text avatar-md">
                                                <i class="feather feather-eye"></i>
                                            </a>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                    <i class="feather feather-more-horizontal"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="feather feather-edit-3 me-3"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                            <i class="feather feather-printer me-3"></i>
                                                            <span>Print</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-clock me-3"></i>
                                                            <span>Remind</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-archive me-3"></i>
                                                            <span>Archive</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-alert-octagon me-3"></i>
                                                            <span>Report Spam</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-trash-2 me-3"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
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
@endsection
