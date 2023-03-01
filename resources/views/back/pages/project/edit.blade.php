@extends('back.templates.pages')
@section('title')

@section('header')
<h1>Project</h1>
@endsection

@section('content')
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <form action="{{ route('admin.project.update', $project->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="card">
        <div class="card-header">
          <h4>Edit</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label>Client</label>
            <input type="text" name="client" value="{{ $project->client }}" class="form-control">
            <p class="text-danger">@error('client'){{ $message }}@enderror</p>
          </div>
          <div class="form-group">
            <label>End User</label>
            <input type="text" name="end_user" value="{{ $project->end_user }}" class="form-control">
            <p class="text-danger">@error('end_user'){{ $message }}@enderror</p>
          </div>
          <div class="form-group">
            <label>Project Name</label>
            <input type="text" name="project_name" value="{{ $project->project_name }}" class="form-control">
            <p class="text-danger">@error('project_name'){{ $message }}@enderror</p>
          </div>
          <div class="form-group">
            <label>No Penawaran</label>
            <input type="text" name="no_penawaran" value="{{ $project->no_penawaran }}" class="form-control">
            <p class="text-danger">@error('no_penawaran'){{ $message }}@enderror</p>
          </div>
          <div class="form-group">
            <label>Jenis Pekerjaan</label>
            <input type="text" name="jenis_pekerjaan" value="{{ $project->jenis_pekerjaan }}" class="form-control">
            <p class="text-danger">@error('jenis_pekerjaan'){{ $message }}@enderror</p>
          </div>
          <div class="form-group">
            <label>Programming Language</label>
            <input type="text" name="progamming_language" value="{{ $project->progamming_language }}" class="form-control">
            <p class="text-danger">@error('progamming_language'){{ $message }}@enderror</p>
          </div>
          <div class="form-group">
            <label>Project Entry Date</label>
            <input type="date" name="project_entry_date" value="{{ $project->project_entry_date }}" class="form-control">
            <p class="text-danger">@error('project_entry_date'){{ $message }}@enderror</p>
          </div>
          <div class="form-group">
            <label>Project Start Date</label>
            <input type="date" name="project_start_date" value="{{ $project->project_start_date }}" class="form-control">
            <p class="text-danger">@error('project_start_date'){{ $message }}@enderror</p>
          </div>
          <div class="form-group">
            <label>Project Completion Date</label>
            <input type="date" name="project_completion_date" value="{{ $project->project_completion_date }}" class="form-control">
            <p class="text-danger">@error('project_completion_date'){{ $message }}@enderror</p>
          </div>
        </div>
        <div class="card-footer">
          <a href="{{ route('admin.project.index') }}" class="btn btn-secondary">Back</a>
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection