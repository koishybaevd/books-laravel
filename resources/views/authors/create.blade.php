@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-6">
            <form action="{{ route('authors.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input name="name" id="inputName" class="form-control" type="text" placeholder="Enter name"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="inputSurname">Surname</label>
                    <input name="surname" id="inputSurname" class="form-control" type="text" placeholder="Enter name"
                        autocomplete="off">
                </div>
                <button type="submit" class="btn btn-dark">Store</button>
            </form>
        </div>
    </div>
</div>
@endsection
