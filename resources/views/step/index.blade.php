@extends('layouts.app')

@section('page-content')
<div class="col-12">
    <div class="card-body border-bottom">
        <div class="row align-items-center">
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs tab-page-toolbar rounded d-inline-flex" role="tablist">
            @foreach ($quiz as $key => $cat)
                <li class="nav-item"><a class="nav-link {{ $key == 0 ? 'active' : ''}}" data-bs-toggle="tab" href="#nav-Preview{{ $key }}{{ $cat->name }}" role="tab">{{ $cat->name }}</a></li>
            @endforeach
        </ul>
        
        <div class="tab-content mt-2">
            @foreach ($quiz as $key => $cat)
                @foreach ($cat->steps as $step)
                    <div class="tab-pane fade show {{ $key == 0 ? 'active' : ''}}" id="nav-Preview{{ $key }}{{ $cat->name }}" role="tabpanel">
                        <p>{{ $step->name }}</p>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
@endsection
