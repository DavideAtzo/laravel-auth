@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="text-secondary my-3">
                    Project list
                </h1>
                <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Create a project</a>
            </div>
        </div>
        <div class="row">
            <table class="table table-hover my-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Project Title</th>
                        <th>Creation date</th>
                        <th>Comands</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->project_title }}</td>
                            <td>{{ $project->creation_date }}</td>
                            <td>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('admin.projects.show', $project) }}" class="btn btn-sm btn-primary">Details</a></li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
