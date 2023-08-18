@extends('master')

@section('content')

<div class="card">
    <div class="card-header">Edit Channerl</div>
    <div class="card-body">
        <form method="post" action="{{ route('faketubes.update', $faketube->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Channelid</label>
                <div class="col-sm-10">
                    <input type="text" name="channelid" class="form-control" value="{{ $faketube->channelid }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Channelname</label>
                <div class="col-sm-10">
                    <input type="text" name="channelname" class="form-control" value="{{ $faketube->channelname }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" value="{{ $faketube->description }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Subscriberscount</label>
                <div class="col-sm-10">
                    <input type="text" name="subscriberscount" class="form-control" value="{{ $faketube->subscriberscount }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Url</label>
                <div class="col-sm-10">
                    <input type="text" name="url" class="form-control" value="{{ $faketube->url }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Createat</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="createat" class="form-control" value="{{ $faketube->createat }}" />
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">updatedat</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" name="updatedat" class="form-control" value="{{ $faketube->updatedat }}" />
            </div>
            
                    </select>
                </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $faketube->id }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>

@endsection('content')
