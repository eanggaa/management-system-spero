@extends('back.templates.pages')
@section('title')

@section('header')
<h1>Project</h1>
@endsection

@section('content')
<div class="row">
  <div class="col-12">

    @if(Session::get('success'))
      <div class="alert alert-primary">{{ Session::get('success') }}</div>
    @endif

    @if(Session::get('fail'))
      <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif

    <div class="card">
      <div class="card-header">
        <h4>Project</h4>
      </div>
      <div class="card-body">
        <div class="float-left">
          <a href="{{ route('admin.project.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="float-right">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-append">                                            
                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <tbody>
              <tr>
                <th>#</th>
                <th>Client</th>
                <th>End User</th>
                <th>Project Name</th>
                <th>Project Entry Date</th>
                <th>Action</th>
              </tr>
              @foreach ($project as $projects)
                @if($projects->status_aktif == 1)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $projects->client }}</td>
                  <td>{{ $projects->end_user }}</td>
                  <td>{{ $projects->project_name }}</td>
                  <td>{{ $projects->project_entry_date }}</td>
                  <td>
                    <form action="{{ route('admin.project.destroy', $projects->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('admin.project.show', $projects->id) }}" class="btn btn-primary">Show</a>
                      <a href="{{ route('admin.project.edit', $projects->id) }}" class="btn btn-primary">Edit</a>
                      <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                  </td>
                </tr>
                @endif
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection