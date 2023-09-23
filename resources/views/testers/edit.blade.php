<!-- resources/views/testers/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <form action="{{ route('testers.update', $tester) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $tester->name }}" required>
        </div>
        <div class="form-group">
            <label for="memo">Memo</label>
            <textarea name="memo" class="form-control">{{ $tester->memo }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
    </form>
@endsection
