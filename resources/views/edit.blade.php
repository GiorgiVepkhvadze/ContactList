@extends('layouts.app')
@section('content')




<div class="container">

    <div class="row">
        <div class="col-sm-4">

      <form style="margin-top:10px;" method="post" action="{{ route('contact_update') }}">

        <input type="hidden" value="{{ $data->id }}" name="id">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Contact Name</label>
          <input type="text" name="contact_name" value="{{ $data->contact_name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contact Number</label>
          <input type="number" name="contact_number" value="{{ $data->contact_number }}" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Update contact</button>
      </form>

    </div>
</div>


</div>




@endsection
