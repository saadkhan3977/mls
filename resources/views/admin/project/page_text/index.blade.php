@extends('admin.layouts.master')
@section('page-title')
    Manage Project Page Text Section
@endsection
@section('mainContent')
<style type="text/css">
  .table-responsive {
    display: block;
    width: 100%;
    height: 52vh;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}
</style>
  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div ui-view class="app-body" id="view">
      <div class="p-a white lt box-shadow generalsetting_admin">
        <div class="row">
          <div class="col-sm-6">
            <h4 class="mb-0 _300">Welcome to MLS</h4>
          </div>
          <div class="col-sm-6 text-sm-right"></div>
        </div>
      </div>
      <div class="padding">

          <div class="box">
    <div class="box-header">
      <h3>Manage Project Page Text Section</h3>
            <hr>
          @if(count($data) < '2')
      <a href="{{route('text.create')}}" class="btn btn-icon generalsetting_admin">
              <i class="fa fa-plus"></i>
            </a>
            @endif 
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t">
        <thead>
          <tr>
            <th>Description</th>
            <th>Manage</th>
          </tr>
        </thead>
        <tbody>
          @if($data)
          @foreach($data as $row)
          <tr>
            <td>{{$row->description}}</td>
            <td>
                  <a class="btn btn-default generalsetting_admin" href="{{route('text.show' ,$row->id)}}"><i class="fa fa-edit "></i></a>
            </td>
          </tr>
          @endforeach
          @endif

        </tbody>
      </table>
    </div>
    
  </div>
      </div>
    </div>
  </div>
@endsection