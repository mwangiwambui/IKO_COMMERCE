<?php?>
@extends('admin.layout.main')
@section('content')
    <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <strong>Basic Form</strong> Elements
                            </div>
                            <div class="card-body card-block">
                                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Static</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static">Add Category</p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            {{ Form::label('name', 'Name') }}
                                        </div>
                                        <div class="col-12 col-md-9">
                                            {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Enter name of category')) }}
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            {{ Form::label('description', 'Description') }}
                                        </div>
                                        <div class="col-12 col-md-9">
                                            {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Enter description')) }}
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>

                                {!! Form::close() !!}
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>

                    </div>
            </div>
    </div>
@endsection
