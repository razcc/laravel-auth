@extends('layouts.app');

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">likes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{ $elem['id']  }}</th>
                <td>{{ $elem['title']  }}</td>
                <td>{{ $elem['content']  }}</td>
                <td>{{ $elem['likes']  }}</td>
            </tr>
            
        </tbody>
    </table>
@endsection
