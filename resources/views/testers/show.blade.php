<!-- resources/views/testers/show.blade.php -->

@extends('layouts.app')

@section('content')
    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $tester->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $tester->name }}</td>
            </tr>
            <tr>
                <th>Memo</th>
                <td>{{ $tester->memo }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('testers.index') }}" class="btn btn-info">一覧に戻る</a>
@endsection
