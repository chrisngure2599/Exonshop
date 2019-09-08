@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('success'))
                        <div class="alert alert-success" >
                            {{session('success')}}
                        </div>
                    @endif
                <div class="card-header">Items</div>
                <div class="card-body">
                @if (count($dataz)>0)
                    {{-- If is found--}}
                    <table class="table table-striped table-bordered">
                        <tr>
                        <th>Name</th>
                        <th>Price</th> 
                        <th colspan="2" >Actions</th>  
                      </tr>
                    @foreach ($dataz as $data)
                       <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->price}}</td>  
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ url('edit/'.$data->id) }}" >Edit</a>
                        </td>                    
                        <td>
                            <a class="btn btn-danger  btn-sm" href="{{ url('edit/'.$data->id) }}" >Delete</a></td>                    
                       </tr>
                    @endforeach        
                    </table> 
                @endif
                </div>
            </div>
            <div id="pagination" class="col-md-6 offset-3 mt-2">
                {{$dataz->links()}}
            </div>
        </div>

    </div>
</div>
@endsection
