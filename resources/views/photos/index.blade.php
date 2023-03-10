<x-layout-bootstrap>
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    @if (count($photos)==0)
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
            <th>*</th>
            <th>*</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($photos as $photo)
            <tr>
                <td>{{$photo->id}}</td>
                <td>{{$photo->title}}</td>
                <td>{{$photo->url}}</td>
                <td><img src="{{$photo->url}}" alt="" class="photo-preview" style="width:100px;height:100px;object-fit:cover;"></td>
                <td>
                    <a href="{{route('photos.show', ['photo'=> $photo->id])}}" class="btn btn-info">DETAILS</a>
                </td>
                <td>
                    <a href="{{route('photos.edit', ['photo'=> $photo->id])}}" class="btn btn-success">EDIT</a>
                </td>
                <td>
                    <form action="{{route('photos.destroy', ['photo'=> $photo->id])}}" method="post">
                        @csrf
                        @method('DELETE')

                        <input class="btn btn-danger" type="submit" value="DELETE">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    
@endif
</x-layout-bootstrap>