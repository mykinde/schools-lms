@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-info">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf








                            <div class="row mb-3">
                                <label for="matriculation_number"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Matriculation Number') }}</label>

                                <div class="col-md-6">
                                    <input id="matriculation_number" type="text"
                                        class="form-control{{ $errors->has('matriculation_number') ? ' is-invalid' : '' }}"
                                        name="matriculation_number" value="{{ old('matriculation_number') }}" required
                                        autofocus>

                                    @if ($errors->has('matriculation_number'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('matriculation_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="matriculation_number-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Matric/NO') }}</label>

                                <div class="col-md-6">
                                    <input id="matriculation_number-confirm" type="text"class="form-control"
                                        name="matriculation_number_confirmation" name="username" required>
                                </div>
                            </div>









                            <div class="row mb-3">
                                <label for="level"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Level') }}</label>

                                <div class="col-md-6" class="form-control">
                                    <input type="radio" id="level" name="level" value="100"
                                        {{ old('level') == '100' ? 'checked' : '' }} />100
                                    <input type="radio" id="level" name="level" value="200"
                                        {{ old('level') == '200' ? 'checked' : '' }} />200
                                    <input type="radio"id="level" name="level" value="300"
                                        {{ old('level') == '300' ? 'checked' : '' }} />300
                                    <input type="radio"id="level" name="level" value="400"
                                        {{ old('level') == '400' ? 'checked' : '' }} />400
                                    <input type="radio"id="level" name="level" value="500"
                                        {{ old('level') == '400' ? 'checked' : '' }} />500
                                    <input type="radio" id="level" name="level" value="99"
                                        {{ old('level') == '99' ? 'checked' : '' }} />Foundation

                                    @if ($errors->has('level'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('level') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="academic_session"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Session') }}</label>

                                <div class="col-md-6" class="form-control">

                                    <input type="radio" id="academic_session" name="academic_session" value="2024/2025"
                                        {{ old('academic_session') == '2024/2025' ? 'checked' : '' }} />2024/2025
                                    {{--

    <input type="radio"id="academic_session" name="academic_session" value="2025/2026" {{ (old('academic_session') == '2025/2026') ? 'checked' : '' }}/>2025/2026
<input type="radio"id="academic_session" name="academic_session" value="2026/2027" {{ (old('academic_session') == '20262027') ? 'checked' : '' }}/>2026/2027
--}}

                                    @if ($errors->has('academic_session'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('academic_session') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address(Persional)') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>






                            <div class="row mb-3">
                                <label for="lastname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Surname/LastName') }}</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text"
                                        class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                        name="lastname" value="{{ old('lastname') }}" required autofocus>

                                    @if ($errors->has('lastname'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="firstname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('FirstName/Personal
                                                                    ') }}</label>

                                <div class="col-md-6">
                                    <input id="firstname" type="text"
                                        class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                        name="firstname" value="{{ old('firstname') }}" required autofocus>

                                    @if ($errors->has('firstname'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="middlename"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Middlename/Other Names') }}</label>

                                <div class="col-md-6">
                                    <input id="middlename" type="text"
                                        class="form-control{{ $errors->has('middlename') ? ' is-invalid' : '' }}"
                                        name="middlename" value="{{ old('middlename') }}" autofocus>

                                    @if ($errors->has('middlename'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('middlename') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>











                            <div class="row mb-3">
                                <label for="college"
                                    class="col-md-4 col-form-label text-md-right">{{ __('College/Faculty') }}</label>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <select class="form-control" id="college" name="college" required>
                                            <option value="sel">--Select--</option>
                                            @php
                                            $colleges = \Illuminate\Support\Facades\DB::table('colleges')
                                            ->get();
                                            @endphp
                                            @foreach($colleges as $key => $data)
                <option value="{{ $data->abbr }}"
                                                   @if (old('college') == '{{ $data->abbr }}') {{ 'selected' }} @endif>{{ $data->name }}
                                               </option>
                                               @endforeach


                                               </select>
                                           </div id="drop_down">
                                           @if ($errors->has('college'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('college') }}</strong>
                                               </span>
                                           @endif
                                       </div>
                                   </div>




                            <div class="row mb-3">
                                <label for="department"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                                <div class="col-md-6" id="county_drop_down">
                                    <div class="form-group">

                                        <select class="form-control" id="department" name="department" required>
                                            <option value="">--Select--</option>



                                            @php
                             $departments = \Illuminate\Support\Facades\DB::table('departments')
                             ->get();
                             @endphp
                             @foreach($departments as $key => $data)
 <option value="{{ $data->abbr }}"
                                    @if (old('department') == '{{ $data->abbr }}') {{ 'selected' }} @endif>{{ $data->name }}
                                </option>
                                @endforeach


                                </select>
                            </div id="drop_down">
                            @if ($errors->has('department'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('department') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                            <div class="row mb-3">
                                <label for="gender"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div class="col-md-6" class="form-control">

                                    <input type="radio" id="gender" name="gender" value="Male"
                                        {{ old('gender') == 'Male' ? 'checked' : '' }} />Male
                                    <input type="radio"id="gender" name="gender" value="Female"
                                        {{ old('gender') == 'Female' ? 'checked' : '' }} />Female


                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>








                            <div class="row mb-3">
                                <label for="birthyear"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Choose Year of Birth') }}</label>

                                <div class="col-md-6" id="county_drop_down">
                                    <div class="form-group">

                                        <select class="form-control" id="birthyear" name="birthyear" required>
                                            <option value="">--Select--</option>
                                            @php
                                            $years = \Illuminate\Support\Facades\DB::table('years')
                                            ->get();
                                            @endphp
                                            @foreach($years as $key => $data)
                <option value="{{ $data->name }}"
                                                   @if (old('birthyear') == '{{ $data->name }}') {{ 'selected' }} @endif>{{ $data->name }}
                                               </option>
                                               @endforeach


                                               </select>
                                           </div id="drop_down">
                                           @if ($errors->has('birthyear'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('birthyear') }}</strong>
                                               </span>
                                           @endif
                                       </div>
                                   </div>




                            <div class="row mb-3">
                                <label for="entryyear"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Choose Year of Entry') }}</label>

                                <div class="col-md-6" id="county_drop_down">
                                    <div class="form-group">

                                        <select class="form-control" id="entryyear" name="entryyear" required>
                                            <option value="">--Select--</option>


                                            @php
                             $sections = \Illuminate\Support\Facades\DB::table('sections')
                             ->get();
                             @endphp
                             @foreach($sections as $key => $data)
 <option value="{{ $data->name }}"
                                    @if (old('entryyear') == '{{ $data->name }}') {{ 'selected' }} @endif>{{ $data->display }}
                                </option>
                                @endforeach


                                </select>
                            </div id="drop_down">
                            @if ($errors->has('entryyear'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('entryyear') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>





                    <div class="row mb-3">
                        <label for="nationality"
                            class="col-md-4 col-form-label text-md-right">{{ __('Choose Nationality') }}</label>

                        <div class="col-md-6" id="county_drop_down">
                            <div class="form-group">

                                <select class="form-control" id="nationality" name="nationality" required>
                                    <option value="">--Select--</option>

                                    @php
                     $countries = \Illuminate\Support\Facades\DB::table('country')
                     ->get();
                     @endphp
                     @foreach($countries as $key => $data)



                     <option value="Nigeria"
                            @if (old('nationality') == '{{ $data->nicename }}') {{ 'selected' }} @endif>{{ $data->nicename }}
                        </option>
                        @endforeach


                        </select>
                    </div id="drop_down">
                    @if ($errors->has('nationality'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nationality') }}</strong>
                        </span>
                    @endif
                </div>
            </div>




                            <div class="row mb-3">
                                <label for="stateoforigin"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Choose state of origin') }}</label>

                                <div class="col-md-6" id="county_drop_down">
                                    <div class="form-group">

                                        <select class="form-control" id="stateoforigin" name="stateoforigin" required>
                                            <option value="">--Select--</option>

                                            @php
                             $states = \Illuminate\Support\Facades\DB::table('states')
                             ->get();
                             @endphp
                             @foreach($states as $key => $data)
 <option value="{{ $data->name }}"
                                    @if (old('stateoforigin') == '{{ $data->name }}') {{ 'selected' }} @endif>{{ $data->name }}
                                </option>
                                @endforeach


                                </select>
                            </div id="drop_down">
                            @if ($errors->has('stateoforigin'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('stateoforigin') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>




                    <div class="row mb-3">
                        <label for="localgovt"
                            class="col-md-4 col-form-label text-md-right">{{ __('Local Government') }}</label>

                        <div class="col-md-6" id="county_drop_down">
                            <div class="form-group">

                                <select class="form-control" id="localgovt" name="localgovt" required>
                                    <option value="">--Select--</option>



                                    @php
                     $govtments = \Illuminate\Support\Facades\DB::table('local_governments')
                     ->get();
                     @endphp
                     @foreach($govtments as $key => $data)
<option value="{{ $data->name }}"
                            @if (old('localgovt') == '{{ $data->name }}') {{ 'selected' }} @endif>{{ $data->name }}
                        </option>
                        @endforeach


                        </select>
                    </div id="drop_down">
                    @if ($errors->has('localgovt'))
                        <span class="help-block">
                            <strong>{{ $errors->first('localgovt') }}</strong>
                        </span>
                    @endif
                </div>
            </div>





            <div class="row mb-3">
                <label for="religion"
                    class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>
                <div class="col-md-6">
                    <div class="form-group">

                        <select class="form-control" id="religion" name="religion" required>
                            <option value="sel">--Select--</option>
                            <option value="Christianity"
                                @if (old('religion') == 'Christianity') {{ 'selected' }} @endif>Christianity</option>
                            <option value="Islam"
                                @if (old('religion') == 'Islam') {{ 'selected' }} @endif>Islam</option>
                            <option value="Traditional"
                                @if (old('religion') == 'CAHS') {{ 'Traditional' }} @endif>Traditional</option>
                            <option value="Judaism"
                                @if (old('religion') == 'Judaism') {{ 'selected' }} @endif>Judaism</option>
                            <option value="Hinduism"
                                @if (old('religion') == 'Hinduism') {{ 'selected' }} @endif>Hinduism/Buddhism
                            </option>
                            <option value="Atheism"
                                @if (old('religion') == 'Atheism') {{ 'selected' }} @endif>Atheism/others
                            </option>
                        </select>
                    </div>
                    @if ($errors->has('religion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('religion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>




            <div class="row mb-3">
                <label for="denominations"
                    class="col-md-4 col-form-label text-md-right">{{ __('Denominations') }}</label>

                <div class="col-md-6" id="county_drop_down">
                    <div class="form-group">

                        <select class="form-control" id="denominations" name="denominations" required>
                            <option value="">--Select--</option>



                            @php
             $churches = \Illuminate\Support\Facades\DB::table('churches')
             ->get();
             @endphp
             @foreach($churches as $key => $data)
<option value="{{ $data->abbr }}"
                    @if (old('denominations') == '{{ $data->abbr }}') {{ 'selected' }} @endif>{{ $data->name }}
                </option>
                @endforeach


                </select>
            </div id="drop_down">
            @if ($errors->has('denominations'))
                <span class="help-block">
                    <strong>{{ $errors->first('denominations') }}</strong>
                </span>
            @endif
        </div>
    </div>




    <div class="row mb-3">
        <label for="region"
            class="col-md-4 col-form-label text-md-right">{{ __('MFM Rdgion( 0ptional for None MFM)') }}</label>

        <div class="col-md-6">
            <input id="region" type="number"
                class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}"
                name="region" value="{{ old('region') }}" autofocus>

            @if ($errors->has('region'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('region') }}</strong>
                </span>
            @endif
        </div>
    </div>




    <div class="row mb-3">
        <label for="parish"
            class="col-md-4 col-form-label text-md-right">{{ __('Parish/Church( 0ptionaal for MFM )') }}</label>

        <div class="col-md-6">
            <input id="parish" type="text"
                class="form-control{{ $errors->has('parish') ? ' is-invalid' : '' }}"
                name="parish" value="{{ old('parish') }}" autofocus>

            @if ($errors->has('parish'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('parish') }}</strong>
                </span>
            @endif
        </div>
    </div>



    {{-- <div class="row mb-3">
        <label for="middlename"
            class="col-md-4 col-form-label text-md-right">{{ __('Middlename/Other Names') }}</label>

        <div class="col-md-6">
            <input id="middlename" type="text"
                class="form-control{{ $errors->has('middlename') ? ' is-invalid' : '' }}"
                name="middlename" value="{{ old('middlename') }}" autofocus>

            @if ($errors->has('middlename'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('middlename') }}</strong>
                </span>
            @endif
        </div>
    </div>


 --}}








    <div class="row mb-3">
        <label for="clocation"
            class="col-md-4 col-form-label text-md-right">{{ __('Church Location/Short Address') }}</label>

        <div class="col-md-6">
            <input id="clocation" type="text"
                class="form-control{{ $errors->has('clocation') ? ' is-invalid' : '' }}"
                name="clocation" value="{{ old('clocation') }}" autofocus>

            @if ($errors->has('clocation'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('clocation') }}</strong>
                </span>
            @endif
        </div>
    </div>











    <div class="row mb-3">
        <label for="parents"
            class="col-md-4 col-form-label text-md-right">{{ __('Parents\' Church Invoemeents') }}</label>


            <div class="col-md-6" id="county_drop_down">
                <div class="form-group">

                    <select class="form-control" id="parents" name="parents" required>
                        <option value="">--Select--</option>
                    <option value="Membership"
                        @if (old('parents') == 'Membership') {{ 'selected' }} @endif>Membership</option>
                    <option value="Worker"
                        @if (old('parents') == 'Worker') {{ 'selected' }} @endif>Worker</option>
                    <option value="Pastor"
                        @if (old('parents') == 'Pastor') {{ 'selected' }} @endif>Pastor</option>
                    <option value="RO"
                        @if (old('parents') == 'RO') {{ 'selected' }} @endif>RO</option>
                    <option value="SRO"
                        @if (old('parents') == 'SRO') {{ 'selected' }} @endif>SRO </option>
                        <option value="AGO"
                        @if (old('parents') == 'AGO') {{ 'selected' }} @endif>AGO </option>
                        <option value="None Pastor"
                        @if (old('parents') == 'one Pastor') {{ 'selected' }} @endif>None MFM Pastor</option>
                        <option value="None MFM GO"
                        @if (old('parents') == 'one MFM GO') {{ 'selected' }} @endif>None MFM GO </option>
                        <option value="None"
                        @if (old('parents') == 'None ') {{ 'selected' }} @endif>None  </option>
                </select>
            </div>
            @if ($errors->has('parents'))
                <span class="help-block">
                    <strong>{{ $errors->first('parents') }}</strong>
                </span>
            @endif
        </div>
    </div>





    <div class="row mb-3">
        <label for="address_state"
            class="col-md-4 col-form-label text-md-right">{{ __('Choosea Residentail Address/State') }}</label>

        <div class="col-md-6" id="county_drop_down">
            <div class="form-group">

                <select class="form-control" id="address_state" name="address_state" required>
                    <option value="">--Select--</option>

                    @php
     $states = \Illuminate\Support\Facades\DB::table('states')
     ->get();
     @endphp
     @foreach($states as $key => $data)
<option value="{{ $data->name }}"
            @if (old('address_state') == '{{ $data->name }}') {{ 'selected' }} @endif>{{ $data->name }}
        </option>
        @endforeach


        </select>
    </div id="drop_down">
    @if ($errors->has('address_state'))
        <span class="help-block">
            <strong>{{ $errors->first('address_state') }}</strong>
        </span>
    @endif
</div>
</div>









      {{--
                         <div class="row mb-3">
                            <label for="accesscode" class="col-md-4 col-form-label text-md-right">{{ __('Access Code (from ICT)') }}</label>

                            <div class="col-md-6">
                                <input id="accesscode" type="text" class="form-control @error('accesscode') is-invalid @enderror" name="accesscode" value="{{ old('accesscode') }}" required autocomplete="accesscode" autofocus>

                                @error('accesscode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

             --}}


                            I agree to the <label class="checkbox-inline"><input type="checkbox" value=""><a
                                    href="#">&nbsp;terms</a></label>









                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Register') }}
                                    </button>
                                    <a href="{{ url('/login') }}" class="text-center">Sign-In instead</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
