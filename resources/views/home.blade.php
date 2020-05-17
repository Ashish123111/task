@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Schedule Dashboard (Role Teacher)</div>

                <div class="card-body">
                   @if ($errors->any())
    <div >
        <div>
            @foreach ($errors->all() as $error)
                <p class="my-2 alert alert-danger">{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="container">
                <form method="post" action="{{route('schedule')}}">
                    @csrf
                    <div class="form-group">
                        <label for="inputName" class="col-sm-1-12 col-form-label">From</label>
                        <div class="col-sm-1-12">
                            <input type="date" class="form-control" name="from" id="inputName" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-1-12 col-form-label">To</label>
                        <div class="col-sm-1-12">
                            <input type="date" class="form-control" name="to" id="inputName" placeholder="">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                </div>
            
            </div>
           
                
        </div>
    </div>
</div>
@endsection
