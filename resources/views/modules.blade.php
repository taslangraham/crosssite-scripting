
@extends('layouts.app')

@section('content')

  <div class="section_gap_top container-fluid">
      
    <div class="row justify-content-center">
         <div class="form-group">
                            <form action="{{route('search')}}" action="get">
                                <input type="text" class="form-control" placeholder="Search For a module" name="module_name">
                                <button class="btn btn-success mt-1">Search</button>
                                <a href="/modules">View all</a>
                            </form>

                            @isset($query)
                                <h1>Search result(s) for: {!!$query!!}</h1>

                            @endisset)
                            
                            
                        </div>

      <div class="card col-10 offset-1">
         
          <div class="card-body">
               <div class="card-text">
              Select module to review it
          </div>
  @if($modules!=null)
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