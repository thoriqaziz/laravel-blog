@extends('layouts.sb-admin')

@section('content')
    
    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Create a new tag
        </div>

        <div class="card-body">
            <form action="{{ route('tag.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="tag">Tag Name</label>
                    <input type="text" name="tag" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Store tag
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop