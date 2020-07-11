@extends('layouts.sb-admin')

@section('content')
    
    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Edit your user
        </div>

        <div class="card-body">
            <form action="{{ route('user.profile.update') }}" method="post" enctype="multiple/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" value="{{ $user->password }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="avatar">Upload new avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter profile</label>
                    <input type="text" name="twitter" value="{{ $user->profile->twitter }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="linkedin">Linkedin profile</label>
                    <input type="text" name="linkedin" value="{{ $user->profile->linkedin }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook profile</label>
                    <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="stackoverflow">Stackoverflow profile</label>
                    <input type="text" name="stackoverflow" value="{{ $user->profile->stackoverflow }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube profile</label>
                    <input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="about">About you</label>
                    <textarea name="about" id="textcontent" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            update profile
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop