<!-- resources/views/testers/create.blade.php -->

@extends('layouts.app')

@section('content')
    <form action="{{ route('testers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="memo">Memo</label>
            <textarea name="memo" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">登録</button>
    </form>
@endsection
