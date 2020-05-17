@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Parents Dashboard</div>
               

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                </div> --}}
                 @if (!$schedule->isEmpty())
                     
                
                <div class="table-responsive"></div>
                <table class="table table-striped table-inverse">
                    <thead class="thead-inverse">
                        <tr>
                            <th>User Name (Role Teacher)</th>
                            <th>From date</th>
                            <th>To date</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedule as $item)
                                
                           
                            <tr>
                            <td scope="row">{{$item->user->name}}</td>
                            <td>{{$item->from}}</td>
                            <td>{{$item->to}}</td>
                            </tr>
                             @endforeach
                            
                        </tbody>
                </table>
            </div>
            @else
            <span class="alert alert-info">Sorry No Data</span>
             @endif
             
        </div>
    </div>
</div>
@endsection
