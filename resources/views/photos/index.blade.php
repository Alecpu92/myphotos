@extends('layouts.layout-bootstrap')

@section('content')

    @if(count($photos) == 0)

    <h1 class="text-center">You have 0 photos</h1>

    @else

    <table class="table table-striped">
            
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Url</th>
                <th>Preview</th>
                <th>*</th>
                
            </tr>
        </thead>

        <tbody>
                    @foreach ($photos as $photo)

                        <tr>
                            <td>{{$photo->id}}</td>
                            <td>{{$photo->title}}</td>
                            <td>{{$photo->url}}</td>
                            <td><img class="photo-preview" src="{{$photo->url}}" alt="" srcset="" style="width:100px;height:100px;object-fit:cover;"></td>
                         <td>
                            <a class="btn btn-info" href="{{ route('photos.show', ['photo' => $photo->id]) }}">DETAILS</a>
                         </td>   
                        </tr>
                        
                    @endforeach

        </tbody>

    </table>    

    @endif

@endsection


