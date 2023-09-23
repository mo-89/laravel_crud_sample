@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Tester</div>
                <div class="card-body">
                    <form action="{{ route('api.testers.update', $tester->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $tester->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="memo" class="form-label">Memo</label>
                            <textarea class="form-control" id="memo" name="memo" rows="3" required>{{ $tester->memo }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
