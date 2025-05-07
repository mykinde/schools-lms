@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success">{{ Auth::user()->email }} Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <p>{{ Auth::user()->lastname }} {{ Auth::user()->firstname }} {{ Auth::user()->middlename }}</p>

                   
                     @if (  Auth::user()->admin == 1 )
                     <div class="cente">
                 {!! $users->links('pagination::bootstrap-5') !!}
                    </div> 
                       @endif

                       
                    <div class="table-responsive">
                    <table class="table table-striped table-hover ">
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
                                @php
                      $i=1;
                  @endphp
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                            
                                             {{ ++$i }}
                                              
                                            </td>
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
        </div> 
    </div>
</div>
@endsection
