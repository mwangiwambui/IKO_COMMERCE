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
    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
        <div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
        </div>

        <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
            <p class="stext-111 cl6 p-t-2">
                There are no shipping methods available. Please double check your address, or contact us if you need any help.
            </p>

            <div class="p-t-15">
									<span class="stext-112 cl8">
										Calculate Shipping
									</span>
                {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

                <div class="bor8 bg0 m-b-1">
                    {{ Form::text('phone', null, array('class' => 'stext-111 cl8 plh3 size-111 p-lr-15')) }}
                </div>

                <div class="bor8 bg0 m-b-12">
                    {{ Form::text('city', null, array('class' => 'stext-111 cl8 plh3 size-111 p-lr-15','placeholder'=>'Enter your city')) }}
                </div>

                <div class="bor8 bg0 m-b-22">
                    {{ Form::text('postal-code', null, array('class' => 'stext-111 cl8 plh3 size-111 p-lr-15','placeholder'=>'Enter your addresss')) }}
                </div>

                <div class="flex-w">
                    <div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                        Update Totals
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
