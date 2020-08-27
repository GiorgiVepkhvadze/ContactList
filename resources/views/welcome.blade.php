@extends('layouts.app')
@section('content')






<div class="container">


    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" style="margin-top:10px;">
        <thead>
          <tr>
            <th class="th-sm">Name</th>
            <th class="th-sm">Phone Number</th>
            <th class="th-sm">Edit</th>
            <th class="th-sm">Delete</th>

          </tr>
        </thead>
        <tbody>

            @foreach ($data as $data_item)

            <tr>
                <td>{{{$data_item->contact_name}}}</td>
                <td>{{{$data_item->contact_number}}}</td>
                <td><a href="{{Request::root()}}/edit/{{{$data_item->id}}}">Change</a></td>
                <td><a href="{{Request::root()}}/drop/{{{$data_item->id}}}">Drop</a></td>

              </tr>



            @endforeach


        </tfoot>
      </table>



</div>




@endsection
