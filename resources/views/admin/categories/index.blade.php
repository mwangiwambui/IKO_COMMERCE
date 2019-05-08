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
                            @if($success = Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{session('message')}}
                                </div>
                            @endif


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
                                            {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5','placeholder'=>'Enter name of category','id'=>'name')) }}
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            {{ Form::label('description', 'Description') }}
                                        </div>
                                        <div class="col-12 col-md-9">
                                            {{ Form::textarea('description', null, array('class' => 'form-control','required'=>'','placeholder'=>'Enter description','id'=>'description')) }}
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>
                                <div class="card-footer">
                                    <button type="submit" id="form_submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>

                                {!! Form::close() !!}
                            </div>

                        </div>

                    <div>
                        <table id="example" style="padding-left:-100px;" class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Action</th>
                                <!-- <th scope="col">Image</th> -->
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $value=1; ?>
                            @if(!empty($categories))
                                @forelse($categories as $category)
                                    <tr>
                                        <td>{{$value++}}</td>
                                        <td><h5><a href="{{route('category.show',$category->id)}}"> {{$category->name}}</a></h5></td>
                                        <td>{{$category->description}}</td>
                                        <td>
                                            <form action="{{route('category.destroy',$category->id)}}"  method="POST">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" type="submit"><i class="zmdi zmdi-delete"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <th>1</th>
                                    <td>No categories</td>
                                </tr>
                                @endforelse
                            @endif

                            </tbody>
                        </table>
                    </div>
                    @if(isset($products))
                        <h3>Products</h3>
                        <table id="example" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Products</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products as $product)
                                <tr><td>{{$product->name}}</td></tr>
                            @empty
                                <tr><td>no data</td></tr>
                            @endforelse

                            </tbody>
                        </table>
                    @endif

                    </div>
            </div>
    </div>




@endsection
