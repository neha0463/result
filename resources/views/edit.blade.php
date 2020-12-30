@extends('base')
@section('content')
<div class="container-fluid mt-2">
    <div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
            <form action="{{route('insertpost')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="">contact</label>
                        <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                    </div>
                    <div class="form-group">
                        <label for="">math</label>
                        <input type="text" name="math" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="">sci</label>
                        <input type="text" name="sci" class="form-control" value="{{old('sci')}}">
                    </div>
                    <div class="form-group">
                        <label for="">sst</label>
                        <input type="text" name="sst" class="form-control" value="{{old('sst')}}">
                    </div>
                    <div class="form-group">
                        <label for="">hindi</label>
                        <input type="text" name="hindi" class="form-control" value="{{old('hindi')}}">
                    </div>
                    <div class="form-group">
                        <label for="">eng</label>
                        <input type="text" name="eng" class="form-control" value="{{old('eng')}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" class="btn btn-danger btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection