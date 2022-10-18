@extends('layouts.app')

@section('content')
<div class="nk-content" style="margin-top: 85px;">
    <div class="container-fluid">
        <div class="nk-content-body">


            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Criar nova permissão</h3>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                                <em class="icon ni ni-more-v"></em>
                            </a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                @can('user-create')
                                    <a class="btn btn-success" href="{{ route('roles.index') }}"> Voltar</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </div>        


            <div class="nk-block">
                <div class="row g-gs">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Erro ao salvar registro!</strong><br><br>
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif


                    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permission:</strong>
                                <br/>
                                @foreach($permission as $value)
                                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                    {{ $value->name }}</label>
                                <br/>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>        
            </div>
        </div>     
    </div>    
</div>



@endsection