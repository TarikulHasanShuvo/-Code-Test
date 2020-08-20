@extends('layouts.app')
@section('content')
<div class="container-fluid app-body settings-page">
	<h3>Resent Post Send to Buffer</h3>
	<table class="table table-striped table-bordered">
        
        <thead>
          <tr>
            <th scope="col">    <input type="txt" placeholder="search">
            </th>
            <th scope="col">    <input type="date"  >
            </th>
            <th> 
              @php
                  $val= DB::table('social_post_groups')->select('type')->distinct()->get(); 
              @endphp
            

                <select name="cars" id="cars">
                  <option selected>All Group</option>
                  @foreach ($val as $item)
                <option ><a href="{{route('group-type',['id'=>$item->type])}}">{{$item->type}}</a></option>   
                  @endforeach
                 
                </select></th>
            

          </tr>
        </thead>
        <tbody>
            <tr>
            <th >Group Name</th>
            <th >Group Type</th>
            <th >Acount Name</th>
            <th >Post Text</th>
            <th >Time</th>
        </tr>
        @foreach ($data as $item)
            
    
          <tr>
          <th>{{$item->name}}</th>
          <th>{{$item->type}}</th>
          <th><img src="" alt=""></th>
          <th>{{$item->post_text}}</th>
          <th>{{$item->created_at}}</th>
        

          </tr>
          @endforeach
        </tbody>
      </table>
      {{$data->links()}}
</div>
@endsection