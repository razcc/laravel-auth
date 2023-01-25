@extends('layouts.app');

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Ttitle</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($var as $elem)
                <tr>
                    <th>{{ $elem['id'] }}</th>
                    <td>
                        <a href="{{ route('admin.posts.show', $elem['id']) }}">{{ $elem['title'] }}</a>
                    </td>
                    <td>{{ $elem['content'] }}</td>
                    <td>{{ $elem['likes'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $var->links() }}
@endsection
