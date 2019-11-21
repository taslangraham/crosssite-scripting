@extends('layouts.app')

@section('content')
<div class="section_gap_top container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
            
                        <div class="form-group">
                            <form action="" action="get">
                                <input type="text" class="form-control" placeholder="Search For a module" name="module_name">
                                <button class="btn btn-success mt-1">Search</button>
                            </form>
                        </div>

                        <div class="form-group">
                            <a href="{{route('modules.all')}}"> <button class="btn btn-success mt-1">View all modules</button></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
