@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Testers</div>
                <div class="card-body">
                    <a href="{{ route('api.testers.create') }}" class="btn btn-primary">Create New Tester</a>
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Memo</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testers as $tester)
                            <tr>
                                <td>{{ $tester->id }}</td>
                                <td>{{ $tester->name }}</td>
                                <td>{{ $tester->memo }}</td>
                                <td>
                                    <a href="{{ route('api.testers.edit', $tester->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('api.testers.delete', $tester->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
