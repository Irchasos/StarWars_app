@extends('layout')
@section('content')

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px"
                         @if(!file_exists($user->avatar))
                             src="{{$user->avatar}}"
                    @else
                        <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">

                        @endif


                    <span class="font-weight-bold">{{$user->name}}{{$user->id}}</span><span
                            class="text-black-50">{{$user->email}}</span><span> </span>
                </div>
                <div class="card-header text-center font-weight-bold">
                    <h4>Uploading Image for your Avatar</h4>
                    <form method="POST" enctype="multipart/form-data" id="upload-image"
                          action="{{ route('avatar.uploaded') }}">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="image" placeholder="Choose image" id="image">
                            @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </form>
                </div>

            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3"><h4 class="text-right">
                            Profile
                            Settings</h4>
                    </div>
                    <form method="POST" action="{{ route('change.data') }}">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Change Name</label>
                                <input type="text" name="new_name" class="form-control"
                                       placeholder="{{$user->name}}" value="{{$user->name}}">
                            </div>
                            <div class="col-md-12"><label class="labels">Change Password</label>
                                <input type="password" name="new_password" class="form-control" value="">
                            </div>
                            <div class="col-md-12"><label class="labels">Range</label>
                                <input type="text" disabled class="form-control" placeholder="Range"
                                       value=" @foreach ($user->roles as $role){{$role->name}}  @endforeach">
                            </div>
                            <div class="col-md-12"><label class="labels">Chef name</label>
                                <input type="text" class="form-control" disabled placeholder="chef name" value="">
                            </div>
                            <div class="col-md-12"><label class="labels">Your tasks</label>
                                @foreach ($permissions as $permission)
                                    <input type="text" class="form-control" disabled
                                           placeholder="  {{$permission->name}}"
                                           value="">
                                @endforeach
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    @hasanyrole('Lieutenant|General|Imperator')
                    <div class="col-md-12"><label class="labels">Send message to your employers</label>
                        <input type="text" class="form-control" placeholder="" value="">
                    </div>
                    <br>
                    @endhasanyrole
                    @hasanyrole('Lieutenant|General|Corporal')
                    <div class="col-md-12"><label class="labels">Send message to your boss</label>
                        <input type="text" class="form-control" placeholder="message to boss" value="">
                    </div>
                    <div class="col-md-12"><label for="story">Chef infos</label>
                        <textarea id="story" disabled name="story" rows="8"
                                  cols="33">It was a dark and stormy night...
                        </textarea>
                    </div>
                    @endhasanyrole
                    @hasanyrole('Lieutenant|General|Imperator')
                    <div class="col-md-12"><label for="story">Raports</label>
                        <textarea id="story" disabled name="story" rows="8"
                                  cols="33">It was a dark and stormy night...
                        </textarea>
                    </div>
                    @endhasrole
                </div>
            </div>
        </div>
    </div>

@endsection
