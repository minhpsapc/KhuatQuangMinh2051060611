@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach
    </ul>
</div>

@endif

<div class="card">
    <div class="card-header">Add New Channel</div>
    <div class="card-body">
        <form method="post" action="{{ route('faketubes.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Channelid</label>
                <div class="col-sm-10">
                    <input type="text" name="channelid" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Channelname</label>
                <div class="col-sm-10">
                    <input type="text" name="channelname" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Subscriberscount</label>
                <div class="col-sm-10">
                    <input type="text" name="subscriberscount" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Url</label>
                <div class="col-sm-10">
                    <input type="text" name="url" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Createat</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="createat" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Updatedat</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="updatedat" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>

@endsection('content')
