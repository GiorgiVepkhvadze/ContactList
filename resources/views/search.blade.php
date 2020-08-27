@extends('layouts.app')
@section('content')




<div class="container">

    <div class="row">

    <div class="col-sm-6">

      <form style="margin-top:10px;" method="post" action="{{ route('findbyname') }}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Contact Name</label>
          <input type="text" name="contact_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Find By Name</button>
      </form>

    </div>


    <div class="col-sm-6">

        <form style="margin-top:10px;" method="post" action="{{ route('findbynumber') }}">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Contact Number</label>
            <input type="text" name="contact_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <button type="submit" class="btn btn-primary">Find By Number</button>
        </form>

      </div>




</div>


</div>




@endsection
