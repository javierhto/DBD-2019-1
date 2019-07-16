@extends('layouts.homestudent')

@section('content')
<div class="row">
                <div class="col-sm-8 main">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nombre</label>
                            <div class="col-sm-9"><p class="form-control-static">{{Auth::user()->nombre}}</p></div>
                        </div>
                        
                        
                    </div>                    
                </div>
            </div>
 @endsection