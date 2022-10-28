@extends('layouts.app')

@section('content')

@can('role-edit')
    <div class="nk-content" style="margin-top: 85px;">
        <div class="container-fluid">
            <div class="nk-content-body">


                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Permissões</h3>
                        </div>
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                                    <em class="icon ni ni-more-v"></em>
                                </a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    @can('product-create')
                                        <a class="btn btn-success" href="{{ route('roles.create') }}"> Nova Permissão</a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nk-block">
                    <div class="row g-gs">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <!-- comecou -->

                        <div class="card card-stretch">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <!--<div class="card-title">
                                            <h5 class="title">All Orders</h5>
                                        </div>-->
                                        <div class="card-tools me-n1">
                                            <ul class="btn-toolbar">
                                                <li>
                                                    <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                </li><!-- li -->
                                                <li class="btn-toolbar-sep"></li><!-- li -->
                                                <li>
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                            <em class="icon ni ni-setting"></em>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                            <ul class="link-check">
                                                                <li><span>Show</span></li>
                                                                <li class="active"><a href="#">10</a></li>
                                                                <li><a href="#">20</a></li>
                                                                <li><a href="#">50</a></li>
                                                            </ul>
                                                            <ul class="link-check">
                                                                <li><span>Order</span></li>
                                                                <li class="active"><a href="#">DESC</a></li>
                                                                <li><a href="#">ASC</a></li>
                                                            </ul>
                                                            <ul class="link-check">
                                                                <li><span>Density</span></li>
                                                                <li class="active"><a href="#">Regular</a></li>
                                                                <li><a href="#">Compact</a></li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .dropdown -->
                                                </li><!-- li -->
                                            </ul><!-- .btn-toolbar -->
                                        </div><!-- card-tools -->
                                        <div class="card-search search-wrap" data-search="search">
                                            <div class="search-content">
                                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                <input type="text" class="form-control form-control-sm border-transparent form-focus-none" placeholder="Pesquisa r�pida">
                                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                            </div>
                                        </div><!-- card-search -->
                                    </div><!-- .card-title-group -->
                                </div><!-- .card-inner -->
                                <div class="card-inner p-0">
                                    <table class="table table-tranx">
                                        <thead>
                                            <tr class="tb-tnx-head">
                                                <th class="tb-tnx-id"><span class="">Código</span></th>
                                                <th class="tb-tnx-info">
                                                    <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                        <span>Nome</span>
                                                    </span>
                                                </th>
                                                <th class="tb-tnx-amount is-alt">
                                                    <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                                </th>
                                                <th class="tb-tnx-action">
                                                    <span>Acão</span>
                                                </th>
                                            </tr><!-- tb-tnx-item -->
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $key => $role)
                                                <tr class="tb-tnx-item">
                                                    <td class="tb-tnx-id">
                                                        <a href="#"><span>{{ ++$i }}</span></a>
                                                    </td>
                                                    <td class="tb-tnx-info">
                                                        <div class="tb-tnx-desc">
                                                            <span class="title">{{ $role->name }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="tb-tnx-amount is-alt">
                                                        <div class="tb-tnx-status"><span class="badge badge-dot bg-warning">Status</span></div>
                                                        <div class="tb-tnx-status"><span class="badge badge-dot bg-danger">Cancel</span></div>
                                                        <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                                                    </td>
                                                    <td class="tb-tnx-action">
                                                        <div class="dropdown">
                                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                <ul class="link-list-plain">
                                                                    <li><a href="{{ route('roles.show',$role->id) }}">Visualizar</a></li>
                                                                    <li><a href="{{ route('roles.edit',$role->id) }}">Editar</a></li>
                                                                    <li>
                                                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-sm']) !!}
                                                                        {!! Form::close() !!}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr><!-- tb-tnx-item -->
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div><!-- .card-inner -->
                                <div class="card-inner">
                                    <ul class="pagination justify-content-center justify-content-md-start">
                                        <li class="page-item"><a class="page-link" href="#"><<</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item"><a class="page-link" href="#">>></a></li>
                                    </ul><!-- .pagination -->
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- .card -->

                        <!-- fim -->                         

                    </div>        
                </div>
            </div>    
        </div>    
    </div>
@else
    
    header("Location: {{ route('home') }}");
    die();    

@endcan
{!! $roles->render() !!}
@endsection