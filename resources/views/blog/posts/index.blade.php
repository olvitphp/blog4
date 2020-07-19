@extends('layouts.app')



@section('content')

<div class="container-fluid">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Date</th>
        </tr>
        </thead>

        @foreach($items as $item)
            <tr>
                <td><a href="{{$item->id }}">{{$item->id }}</a></td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->created_at }}</td>
            </tr>
        @endforeach

    </table>


</div>


@endsection
