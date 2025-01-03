@extends('layouts.layout')

@section('content')
    @can('add photo to items')
        <div class="container mt-5">

            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card bg-dark text-white">
                <div class="card-header text-center font-weight-bold">
                    <h2>Uploading Image for {{ request()->parameter }}</h2>
                </div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ route('image.uploaded') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" name="image" placeholder="Choose image" id="image">
                                    @error('image')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <strong>Type: {{ $model }}</strong>
                                    <input type="text" name="photoable_type" hidden value="App\Models\{{ $model }}" class="form-control" style="background-color: #2b2a2a">
                                    @if ($errors->has('photoable_type'))
                                        <span class="text-danger">{{ $errors->first('photoable_type') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <strong>Record:</strong>
                                <select style="color: black" name="photoable_id" required>
                                    <option selected disabled>Choose Record</option>
                                    @foreach($records as $record)
                                        <option style="background-color: grey" value="{{ $record->id }}">
                                            {{ $record->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endcan

    @cannot('add photo to items')
        <div class="card bg-dark">
            <a href="{{ route('myAccount') }}" class="card-header text-center font-weight-bold text-white">
                <h2>Your range is too low</h2>
            </a>
        </div>
    @endcannot
@endsection
