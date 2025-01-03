@extends('person.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="text-center">Songs</h2>
                <a href={{ Route('addSong') }}>
                    <button class="btn btn-outline-primary">Add Song</button>
                </a>
                <table class="table mt-3">
                    <thead>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Artist</th>
                        <th>Duration</th>
                        <th>Year</th>
                        <th>Image Path</th>
                        <th>Video Path</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </thead>

                    <tbody>
                        @foreach ($data as $songs)
                            <tr>
                                <td>{{ $songs->id }}</td> 
                                <td>{{ $songs->title }}</td>
                                <td>{{ $songs->artist }}</td>
                                <td>{{ $songs->duration }}</td>
                                <td>{{ $songs->year }}</td>
                                <td>{{ $songs->image_path }}</td>
                                <td>{{ $songs->video_path }}</td>
                                <td>{{ $songs->updated_at }}</td>
                                <td>{{ $songs->updated_at }}</td>
                                <td class="d-flex">
                                    <a href="" class="btn btn-outline-primary"> View </a>&nbsp;
                                    <a href={{ Route('editSong', $songs->id) }} class="btn btn-outline-success">
                                        Edit
                                    </a>
                                    &nbsp;
                                    <a href={{ Route('deleteSong', $songs->id) }} class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        <tr></tr>


                    </tbody>


                </table>
            </div>
        </div>
    </div>
@endsection
