@extends('layouts.sb-admin')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Categories</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Categories</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Editing</th>
                        <th>Deleting</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Category Name</th>
                        <th>Editing</th>
                        <th>Deleting</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if($categories->count() > 0)
                    @foreach($categories as $category)
                    <tr>
                        <td>
                            {{ $category-> name }}
                        </td>
                        <td>
                            <a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-sm btn-info">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <th colspan="5" class="text-center">No categories yet.</th>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop