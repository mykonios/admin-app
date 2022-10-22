@extends('layouts.app')

@section('content')

@can('role-edit')
    <div class="nk-content" style="margin-top: 85px;">
        <div class="container-fluid">
            <div class="nk-content-body">


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $role->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permissions:</strong>
                            @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $v)
                                    <label class="label label-success">{{ $v->name }},</label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                
            </div>     
        </div>    
    </div>
@else
    
    header("Location: {{ route('home') }}");
    die();    

@endcan

@endsection