@extends('layouts.app')

<!-- Edit author -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-12">
            <form action="{{ route('authors.update', ['id' => $author->id]) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input name="name" id="inputName" class="form-control" type="text" placeholder="Enter name"
                        autocomplete="off" value="{{ $author->name }}">
                </div>
                <div class="form-group">
                    <label for="inputSurname">Surname</label>
                    <input name="surname" id="inputSurname" class="form-control" type="text" placeholder="Enter name"
                        autocomplete="off" value="{{ $author->surname }}">
                </div>
                <button type="submit" class="btn btn-dark">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
