@extends('layouts.main')

@section('content')
      <div class="" style="margin-right:300px; margin-left:300px; margin-top:50px; margin-bottom:50px;" >
        <div class="container">
          <h1>Add Address Information</h1>
          <hr>
          {!! Form::open(['route' => 'addresses.store', 'method' => 'post']) !!}


               <div class="form-group">
                   {{ Form::label('addressline', 'Address Line') }}
                   {{ Form::text('addressline', null, array('class' => 'form-control')) }}
               </div>

               <div class="form-group">
                   {{ Form::label('city', 'City') }}
                   {{ Form::text('city', null, array('class' => 'form-control')) }}
               </div>
               <div class="form-group">
                   {{ Form::label('state', 'State') }}
                   {{ Form::text('state', null, array('class' => 'form-control')) }}
               </div>
               <div class="form-group">
                   {{ Form::label('zip', 'Zip') }}
                   {{ Form::text('zip', null, array('class' => 'form-control')) }}
               </div>
               <div class="form-group">
                   {{ Form::label('country', 'Country') }}
                   {{ Form::text('country', null, array('class' => 'form-control')) }}
               </div>
               <div class="form-group">
                   {{ Form::label('phone', 'Phone') }}
                   {{ Form::text('phone', null, array('class' => 'form-control')) }}
               </div><br><br>

               <div class="" style="margin-right: 30px; margin-left: 25px;">
                   {{ Form::submit('Proceed to Payment', array('class' => 'btn btn-primary btn-block btn-glow  mx-1')) }}
               </div>

               {!! Form::close() !!}


        </div>
      </div>

@endsection
