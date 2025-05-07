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


                    {{ Auth::user()->lastname }} {{ Auth::user()->firstname }} {{ Auth::user()->middlename }}
                    <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>



										<th>Subject</th>
										<th>Content</th>


                                    </tr>
                                </thead>
                                <tbody>
                                <tr class="table-active">
                            <td><b>Matri/Exam No</b> </td>
                            <td>{{ Auth::user()->matriculation_number }}</td>
                        </tr>

                            <tr>
                            <td><b> Email</b></td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>

                        <tr>
                            <td><b>College/Faculty </b></td>
                            <td>{{ Auth::user()->college }}</td>
                        </tr>

                        <tr>
                            <td><b>Department/Program </b></td>
                            <td>{{ Auth::user()->department }}</td>
                        </tr>



                        <tr>
                            <td><b><b>Session</b> </b></td>
                            <td>{{ Auth::user()->academic_session }} </td>
                        </tr>

                        <tr>
                            <td><b>Level</b></td>
                            <td>{{ Auth::user()->level}} </td>
                        </tr>

                        <tr>
                            <td><b><b>Religion</b> </b></td>
                            <td>{{ Auth::user()->religion}} </td>
                        </tr>
                          <tr>
                            <td><b>Church Demnm</b></td>
                            <td> {{ Auth::user()->denominations }}</td>
                        </tr>

                        <tr>
                            <td><b>Church Parish</b> </td>
                            <td>{{ Auth::user()->parish }} </td>
                        </tr>

                        <tr>
                            <td><b>Church Location</b> </td>
                            <td>{{ Auth::user()->clocation }} </td>
                        </tr>
 <tr>
                            <td><b>Parents </b> </td>
                            <td>{{ Auth::user()->parents }} </td>
                        </tr>

                        <tr>
                            <td><b>Gender</b></td>
                            <td>{{ Auth::user()->gender}} </td>
                        </tr>

                        <tr>
                            <td><b><b>Region</b> </b></td>
                            <td>{{ Auth::user()->region}} </td>
                        </tr>

                        <tr>
                            <td><b>Entry Year</b></td>
                            <td>{{ Auth::user()->entryyear }} </td>
                        </tr>

                        <tr>
                            <td><b>Country</b> </td>
                            <td>{{ Auth::user()->nationality }}</td>
                        </tr>

                        <tr>
                            <td><b>State Of Origin</b> </td>
                            <td>{{ Auth::user()->stateoforigin }}</td>
                        </tr>

                        <tr>
                            <td><b>LocalGoverment</b> </td>
                            <td>{{ Auth::user()->localgovt }}</td>
                        </tr>






                        <tr>
                            <td><b>Registered Date</b></td>
                            <td>{{ Auth::user()->created_at }} </td>
                        </tr>

                                </tbody>
                            </table>

                    <li class="class"></li>

                    @if (  Auth::user()->admin == 1 )

                    <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <input type="file" name="file" class="form-control">

                <br>

                <button class="btn btn-success">Import User Data</button>

            </form>

            @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
