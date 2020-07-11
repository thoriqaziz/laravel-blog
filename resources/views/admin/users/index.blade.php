@extends('layouts.sb-admin')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Users</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Users</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Permission</th>
                        <th>Trash</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Permission</th>
                        <th>Trash</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if($users->count() > 0)
                    @foreach($users as $user)
                    <tr>
                        <td><img src="{{ asset($user->profile->avatar) }}" alt="" width="60px" height="60px" style="border-radius: 50px;"></td>
                        <td>{{ $user->name }}</td>
                        <td>
                            @if($user->admin)
                            <a href="{{ route('user.not.admin', ['id' => $user->id ]) }}" class="btn btn-sm btn-danger">Remove Permissions</a>
                            @else
                            <a href="{{ route('user.admin', ['id' => $user->id ]) }}" class="btn btn-sm btn-success">Make admin</a>
                            @endif
                        </td>
                        <td>
                            @if(Auth::id() != $user->id)
                            <a href="{{ route('user.delete', ['id' => $user->id ]) }}" class="btn btn-sm btn-danger">Delete</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <th colspan="5" class="text-center">No users yet.</th>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop