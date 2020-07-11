@extends('layouts.sb-admin')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Tags</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Tags</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tag</th>
                        <th>Editing</th>
                        <th>Deleting</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tag</th>
                        <th>Editing</th>
                        <th>Deleting</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if($tags->count() > 0)
                    @foreach($tags as $tag)
                    <tr>
                        <td>
                            {{ $tag-> tag }}
                        </td>
                        <td>
                            <a href="{{ route('tag.edit', ['id' => $tag->id ]) }}" class="btn btn-sm btn-info">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('tag.delete', ['id' => $tag->id ]) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <th colspan="5" class="text-center">No tags yet.</th>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop