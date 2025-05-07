@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('User') }}
                            </span>

                             <div class="float-right">
                             {{-- 
                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  
                                --}}   {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Lastname</th>
										<th>Firstname</th>
										<th>Middlename</th>
										<th>Email</th>
										<th>Matriculation Number</th>
										<th>Vocations</th>
										<th>Level</th>
										<th>Academic Session</th>
										<th>College</th>
										<th>Department</th>
										<th>Gender</th>
										<th>Status</th>
										<th>Enrolment</th>
										<th>General</th>
										<th>Admin</th>
										<th>Created At</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $user->name }}</td>
											<td>{{ $user->lastname }}</td>
											<td>{{ $user->firstname }}</td>
											<td>{{ $user->middlename }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->matriculation_number }}</td>
											<td>{{ $user->vocations }}</td>
											<td>{{ $user->level }}</td>
											<td>{{ $user->academic_session }}</td>
											<td>{{ $user->college }}</td>
											<td>{{ $user->department }}</td>
											<td>{{ $user->gender }}</td>
											<td>{{ $user->status }}</td>
											<td>{{ $user->enrolment }}</td>
											<td>{{ $user->general }}</td>
											<td>{{ $user->admin }}</td>
											<td>{{ $user->created_at }}</td>

                                            <td>
                                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('users.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
