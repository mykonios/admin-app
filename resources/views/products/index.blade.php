@extends('layouts.app')

@section('content')

<div class="nk-content" style="margin-top: 85px;">
    <div class="container-fluid">
        <div class="nk-content-body">



            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Dashboard</h3>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                                <em class="icon ni ni-more-v"></em>
                            </a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown">
                                                <em class="d-none d-sm-inline icon ni ni-calender-date"></em>
                                                <span> <span class="d-none d-md-inline">Last</span> 30 Days </span>
                                                <em class="dd-indc icon ni ni-chevron-right"></em>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li>
                                                        <a href="#">
                                                            <span>Last 30 Days</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span>Last 6 Months</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span>Last 1 Years</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nk-block-tools-opt">
                                        <a href="#" class="btn btn-primary">
                                            <em class="icon ni ni-reports"></em>
                                            <span>Reports</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="nk-block">
                <div class="row g-gs">

                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h3 class="nk-block-title page-title">Dashboard</h3>
                            </div>
                            <div class="pull-right">
                                @can('product-create')
                                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                                @endcan
                            </div>
                        </div>
                    </div>                

                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Products</h2>
                            </div>
                            <div class="pull-right">
                                @can('product-create')
                                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                                @endcan
                            </div>
                        </div>
                    </div>


                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->detail }}</td>
                            <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                                    @can('product-edit')
                                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                    @endcan


                                    @csrf
                                    @method('DELETE')
                                    @can('product-delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    @endcan
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>        
            </div>
        </div>     
    </div>    
</div>
    {!! $products->links() !!}
@endsection