<!-- resources/views/testers/index.blade.php -->

@extends('layouts.app')

@section('content')
    <a href="{{ route('testers.create') }}" class="btn btn-primary">新規登録</a>
    <table class="table">
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
                        <a href="{{ route('testers.show', $tester) }}" class="btn btn-info">詳細</a>
                        <a href="{{ route('testers.edit', $tester) }}" class="btn btn-warning">編集</a>
                        <form action="{{ route('testers.destroy', $tester) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
