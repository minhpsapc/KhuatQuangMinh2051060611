@extends('master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Channel Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('faketubes.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>channelid</b></label>
            <div class="col-sm-10">
                {{ $faketube->channelid }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>channelname</b></label>
            <div class="col-sm-10">
                {{ $faketube->channelname }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>description</b></label>
            <div class="col-sm-10">
                {{ $faketube->description }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>subscriberscount</b></label>
            <div class="col-sm-10">
                {{ $faketube->subscriberscount }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>url</b></label>
            <div class="col-sm-10">
                {{ $faketube->url }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>createat</b></label>
            <div class="col-sm-10">
                {{ $faketube->createat }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>updatedat</b></label>
            <div class="col-sm-10">
                {{ $faketube->updatedat }}
            </div>
        </div>
        </div>
    </div>
</div>

@endsection('content')


