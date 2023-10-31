@extends('admin.layout.main')

@push('title')
    Orders List
@endpush

@push('heading')
    Orders List
@endpush

@section('main-section')
    <div id="order-search">
        <input class="form-control" type="text" name="search">
        <button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" height="1.25em"
                viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>
                    svg {
                        fill: #f5f7fa
                    }
                </style>
                <path
                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
            </svg>
        </button>
    </div>

    <!-- Content Row -->
    <div class="row">

        <table class="table m-1 w-0" id="admin-orders">
            <thead>
                <th>User</th>
                <th>Product</th>
                <th>Price</th>
                <th>Date</th>
                <th style="width: 10rem;">
                    Status
                </th>
            </thead>
            <tbody>
                <tr>
                    <td class="">a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td class="order-status">
                        <div>
                            Placed
                        </div>
                        <div class="status-form">
                            <select name="status" class="form-control" style="width: 10px;">
                                <option value="0" disabled selected>Status:</option>
                                <option value="Placed">Placed</option>
                                <option value="Dispatched">Dispatched</option>
                                <option value="Dilevered">Dilevered</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>
    <!-- /.container-fluid -->
@endsection
