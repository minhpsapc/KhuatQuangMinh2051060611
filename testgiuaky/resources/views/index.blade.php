@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Channel Data</b></div>
            <div class="col col-md-6">
                <a href="{{ route('faketubes.create') }}" class="btn btn-success btn-sm float-end">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Channelid</th>
                <th>Channelname</th>
                <th>Description</th>
                <th>Subscriberscount</th>
                <th>Url</th>
                <th>Createat</th>
                <th>Updatedat</th>
                <th>Action</th>
            </tr>
            @if(count($data) > 0)

                @foreach($data as $row)

                    <tr>
                        <td>{{ $row->channelid }}</td>
                        <td>{{ $row->channelname }}</td>
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->subscriberscount }}</td>
                        <td>{{ $row->url }}</td>
                        <td>{{ $row->createat }}</td>
                        <td>{{ $row->updatedat }}</td>
                        <td>
                            <form method="post" action="{{ route('faketubes.destroy', $row->id) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('faketubes.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{ route('faketubes.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a class="btn btn-primary" href="#" data-id={{$row->id }} data-toggle="modal" data-target="#{{$row->id}}">Delete</a>
                                <!-- Modal -->
                    
                        <div class="modal fade" id="{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Company</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure delete the company with id: {{$row->id}}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    
                            </form>

                        </td>
                    </tr>

                @endforeach

            @else
                <tr>
                    <td colspan="5" class="text-center">No Data Found</td>
                </tr>
            @endif
        </table>
        {!! $data->links() !!}
    </div>
 </div> 
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
@endsection
