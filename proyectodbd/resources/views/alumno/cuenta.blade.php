@extends('layouts.app')

@section('content')
<div id="app" class="container">
    <Sidebar>sidebar</Sidebar>
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">    Información personal</h1>
        </div>
        <div class="col-sm-7">
            <a href="#" class="btn btn-primary pull-right">Actualizar datos</a>
            <table class="table table-hover table-sprite">
            </table>
        </div>
        <div class="col-sm-5">
        </div>
    </div>
    
</div>

@endsection