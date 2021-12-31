
@extends('admin.layouts.app')
 
 @section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Users</h3>
          @include("admin.components.message")

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped Users">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          User Name
                      </th>
                      <th style="width: 30%">
                          User Email
                      </th>
                      <th>
                          Login Type
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a href="#">
                            {{ $user->name }}
                          </a>
                          <br/>
                          <small>
                              Created {{ $user->created_at }}
                          </small>
                      </td>
                      <td>
                          <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                      </td>
                      <td>
                          Email
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Active</span>
                      </td>
                      <td class="project-actions text-right">
                          <form style="display: none" action="{{ route('admin.user.destroy',$user->id ) }}" method="post" id="del-form-{{ $user->id }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            <a class="btn btn-danger btn-sm" onclick="
                                 if (confirm('Are You Sure to delete user {{ $user->name }}?')){
                                     event.preventDefault();
                                     document.getElementById('del-form-{{ $user->id }}').submit();
                                 }else {
                                     event.preventDefault();
                                 }">
                                 <i class="fas fa-trash"></i>
                                Delete
                            </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

 @endsection