
@extends('layouts.app')

@section('content')

  <div class="section_gap_top container-fluid mt-5">
      
    <div class="row justify-content-center">
        
@if($module!=null)
       <h2>Reviews for {{$module->name}}, code: {{$module->code}}</h2>
      <div class="card col-7" style="overflow-y:scroll">
         
@if(count($reviews)>0)
@foreach ($reviews as $review)
            <h3>{!!$review->review!!}</h2>


                {{-- this sanitizes the data
                    
                h1>htmlspecialchars($review->review)</h1>    
                --}}
                <hr>
                @endforeach

@else
@endif
  
   
             </div>

          
          <div class="card col-4 ml-1">
<h3>Write a review</h3>

<form action="{{route('module.make.review', ['id'=>$module->id, 'code'=>$module->code])}}" method="post">
   {{csrf_field()}} 
    <textarea name="review" id=""class='col-12' rows="10" placeholder="write a review" style="resize:none" required></textarea>
    <input type="text" hidden name="module_name" value="">
    <br>
<button class="btn btn-success mt-2">Submit</button>
</form>
          </div>
          @else
          @endif

      </div>
   </div>
  </div>
@endsection