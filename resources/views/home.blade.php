@extends('base')
@section('content')
<div class="container">
    <div class="row">
        @foreach($data as $p)
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="name">{{$p->name}}</h6>
                    <h6 class="contact">{{$p->contact}}</h6>
                    <h6 class="email">{{$p->email}}</h6>
                    <h6 class="sci">{{$p->sci}}</h6>
                    <h6 class="ssc">{{$p->ssc}}</h6>
                    <h6 class="hindi">{{$p->hindi}}</h6>
                    <h6 class="english">{{$p->english}}</h6>
                </div>
            
            </div>
        </div>
        @endforeach
    </div>
     
</div>
@endsection