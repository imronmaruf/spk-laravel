@extends('layout.main')


@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User Management</h1>
  </div>

  <div class="table-responsive col-lg-10">
    <a href="/dashboard/users/create" class="btn btn-primary mb-3">
      <span data-feather="plus"></span>
      Create New User
    </a>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class="text-center">#</th>
          <th scope="col" class="text-center">Name</th>
          <th scope="col" class="text-center">Username</th>
          <th scope="col" class="text-center">Level</th>
          <th scope="col" class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @if ($users->count())
          @foreach ($users as $user)
            <tr>
              {{-- $loop->iteraion => nomor / urutan loop keberapa nya --}}
              <td class="text-center">{{ $loop->iteration }}</td>
              <td class="text-center">{{ $user->name }}</td>
              <td class="text-center">{{ $user->username }}</td>
              <td class="text-center">{{ $user->level }}</td>
              <td class="text-center">
                <a href="/dashboard/users/{{ $user->id }}/edit" class="text-decoration-none text-success">
                  <span data-feather="edit"></span>
                </a>
                <form action="/dashboard/users/{{ $user->id }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf

                  <span role="button" class="text-decoration-none text-danger btnDelete" data-object="user">
                    <span data-feather="x-circle"></span>
                  </span>
                </form>
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td colspan="4" class="text-danger text-center p-4">
              <h4>You haven't create any users yet</h4>
            </td>
          </tr>
        @endif
      </tbody>
    </table>
  </div>
@endsection