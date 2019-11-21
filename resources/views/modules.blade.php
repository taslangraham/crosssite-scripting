
@extends('layouts.app')

@section('content')

  <div class="section_gap_top container-fluid">
      
    <div class="row justify-content-center">
        

      <div class="card col-10 offset-1">
         
          <div class="card-body">
               <div class="card-text">
              Select a module to review it
          </div>
  @if(count($modules)>0)
       @foreach ($modules as $module)
            <a href="{{route('modules.single', ['id'=>$module->id, 'code'=>$module->code])}}" class="form-control mt-2">
            <h2>{{$module->name}} | Code: {{$module->code}}</h2>
        </a>
       @endforeach
    @else
    @endif
          </div>
      </div>
   </div>
  </div>
@endsection