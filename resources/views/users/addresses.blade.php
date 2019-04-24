@extends('layouts.addressLayout')

@section('content')
    <h1>Add Address Information</h1>
    <hr>
     <form action="{{ route('storeAddresses') }}" method="post">
     {{ csrf_field() }}

      <div class="form-group">
        <label for="addressline">Address Line</label>
        <input type="text" class="form-control" id="taskTitle"  name="addressline">
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="taskTitle"  name="city">
      </div><div class="form-group">
        <label for="state">State</label>
        <input type="text" class="form-control" id="taskTitle"  name="state">
      </div>
      <div class="form-group">
        <label for="zip">Zip Code</label>
        <input type="text" class="form-control" id="taskTitle"  name="zip">
      </div>
      <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" id="taskTitle"  name="country">
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" class="form-control" id="taskDescription" name="phone">
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
