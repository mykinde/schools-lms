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
                                            <option value="CBAS"
                                                @if (old('college') == 'CBAS') {{ 'selected' }} @endif>Basic &
                                                Applied Sciences</option>
                                            <option value="CHMS"
                                                @if (old('college') == 'CHMS') {{ 'selected' }} @endif>Hmanties &
                                                Management Sci</option>
                                            <option value="CAHS"
                                                @if (old('college') == 'CAHS') {{ 'selected' }} @endif>Allied Health
                                                Sciences</option>
                                            <option value="SPDG"
                                                @if (old('college') == 'SPGD') {{ 'selected' }} @endif>School of Post
                                                Graduate</option>
                                            <option value="FOUD"
                                                @if (old('college') == 'FOUD') {{ 'selected' }} @endif>Foundation
                                            </option>
                                        </select>
                                    </div>
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

                                            <option value="GEP"
                                                @if (old('department') == 'GED') {{ 'selected' }} @endif>Geophysic
                                            </option>
                                            <option value="GEO"
                                                @if (old('department') == 'GEO') {{ 'selected' }} @endif>Geology
                                            </option>
                                            <option value="BIO"
                                                @if (old('department') == 'BIO') {{ 'selected' }} @endif>Biology
                                            </option>
                                            <option value="BCH"
                                                @if (old('department') == 'BCH') {{ 'selected' }} @endif>Biochemistry
                                            </option>
                                            <option value="BIT"
                                                @if (old('department') == 'BIT') {{ 'selected' }} @endif>
                                                BioTechnology </option>
                                            <option value="CHM"
                                                @if (old('department') == 'CHM') {{ 'selected' }} @endif>Chemistry
                                            </option>
                                            <option value="CSC"
                                                @if (old('department') == 'CSC') {{ 'selected' }} @endif>Computer
                                                Science </option>
                                            <option value="CBS"
                                                @if (old('department') == 'CYB') {{ 'selected' }} @endif>Cyber
                                                Security </option>
                                            <option value="FST"
                                                @if (old('department') == 'FST') {{ 'selected' }} @endif>Food Science
                                                & Technology </option>
                                            <option value="MAT"
                                                @if (old('department') == 'MAT') {{ 'selected' }} @endif>Mathematics
                                            </option>
                                            <option value="MCB"
                                                @if (old('department') == 'MCB') {{ 'selected' }} @endif>Microbiology
                                            </option>
                                            <option value="PHY"
                                                @if (old('department') == 'PHY') {{ 'selected' }} @endif>Physics
                                            </option>
                                            <option value="PEL"
                                                @if (old('department') == 'PWE') {{ 'selected' }} @endif>Physics With
                                                Electronics </option>
                                            <option value="SWE"
                                                @if (old('department') == 'CSE') {{ 'selected' }} @endif>Software
                                                Engineering </option>
                                            <option value="ACC"
                                                @if (old('department') == 'ACC') {{ 'selected' }} @endif>Accounting
                                            </option>
                                            <option value="BFN"
                                                @if (old('department') == 'FIN') {{ 'selected' }} @endif>Finance
                                            </option>
                                            <option value="BUS"
                                                @if (old('department') == 'BUS') {{ 'selected' }} @endif>Business
                                                Administration </option>
                                            <option value="ECO"
                                                @if (old('department') == 'ECO') {{ 'selected' }} @endif>Economics
                                            </option>
                                            <option value="ENG"
                                                @if (old('department') == 'ENG') {{ 'selected' }} @endif>English
                                                Language </option>
                                            <option value="FAA"
                                                @if (old('department') == 'FAA') {{ 'selected' }} @endif>Fine and
                                                Applied Art </option>
                                            <option value="IRP"
                                                @if (old('department') == 'IRP') {{ 'selected' }} @endif>Industrial
                                                Relations & Personnel Mgt </option>
                                            <option value="MAS"
                                                @if (old('department') == 'MAS') {{ 'selected' }} @endif>Mass
                                                Communication </option>
                                            <option value="MLS"
                                                @if (old('department') == 'MLS') {{ 'selected' }} @endif>Meidical
                                                Laboratory Science</option>
                                            <option value="MUS"
                                                @if (old('department') == 'MUS') {{ 'selected' }} @endif>Music
                                            </option>
                                            <option value="NUR"
                                                @if (old('department') == 'NUR') {{ 'selected' }} @endif>Nursing
                                                Science</option>
                                            <option value="NAD"
                                                @if (old('department') == 'NAD') {{ 'selected' }} @endif>Nutriction
                                                and Diestetics</option>
                                            <option value="PUD"
                                                @if (old('department') == 'PUD') {{ 'selected' }} @endif>Public
                                                Administration </option>
                                            <option value="PHT"
                                                @if (old('department') == 'PHT') {{ 'selected' }} @endif> Public
                                                Health </option>
                                            <option value="RES"
                                                @if (old('department') == 'RES') {{ 'selected' }} @endif>Religious
                                                Studies </option>
                                            <option value="SIV"
                                                @if (old('department') == 'SIV') {{ 'selected' }} @endif>Securities
                                                and Investment </option>
                                            <option value="FOD"
                                                @if (old('department') == 'FOD') {{ 'selected' }} @endif>Foundation
                                                Programme</option>

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
                                <label for="enrolment"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Enrolment( 0ptional )') }}</label>

                                <div class="col-md-6">
                                    <input id="enrolment" type="text"
                                        class="form-control{{ $errors->has('enrolment') ? ' is-invalid' : '' }}"
                                        name="enrolment" value="{{ old('enrolment') }}" autofocus>

                                    @if ($errors->has('enrolment'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('enrolment') }}</strong>
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

                                            <option value="2010"
                                                @if (old('birthyear') == '2010') {{ 'selected' }} @endif>2010
                                            </option>
                                            <option value="2009"
                                                @if (old('birthyear') == '2009') {{ 'selected' }} @endif>2009
                                            </option>
                                            <option value="2008"
                                                @if (old('birthyear') == '2008') {{ 'selected' }} @endif>2008
                                            </option>
                                            <option value="2007"
                                                @if (old('birthyear') == '2007') {{ 'selected' }} @endif>2007
                                            </option>
                                            <option value="2006"
                                                @if (old('birthyear') == '2006') {{ 'selected' }} @endif>2006
                                            </option>
                                            <option value="2005"
                                                @if (old('birthyear') == '2005') {{ 'selected' }} @endif>2005
                                            </option>
                                            <option value="2004"
                                                @if (old('birthyear') == '2004') {{ 'selected' }} @endif>2004
                                            </option>
                                            <option value="2003"
                                                @if (old('birthyear') == '2003') {{ 'selected' }} @endif>2003
                                            </option>
                                            <option value="2002"
                                                @if (old('birthyear') == '2002') {{ 'selected' }} @endif>2002
                                            </option>
                                            <option value="2001"
                                                @if (old('birthyear') == '2001') {{ 'selected' }} @endif>2001
                                            </option>
                                            <option value="2000"
                                                @if (old('birthyear') == '2000') {{ 'selected' }} @endif>2000
                                            </option>
                                            <option value="1999"
                                                @if (old('birthyear') == '1999') {{ 'selected' }} @endif>1999
                                            </option>

                                            <option value="1998 AND"
                                                @if (old('birthyear') == '1998 AND') {{ 'selected' }} @endif>1998 And
                                                Below </option>

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

                                            <option value="2024"
                                                @if (old('entryyear') == '2010') {{ 'selected' }} @endif>2024/25
                                            </option>
                                            <option value="2023"
                                                @if (old('entryyear') == '2009') {{ 'selected' }} @endif>2023/24
                                            </option>
                                            <option value="2022"
                                                @if (old('entryyear') == '2008') {{ 'selected' }} @endif>2022/23
                                            </option>
                                            <option value="2021"
                                                @if (old('entryyear') == '2007') {{ 'selected' }} @endif>2021/22
                                            </option>
                                            <option value="2020"
                                                @if (old('entryyear') == '2006') {{ 'selected' }} @endif>2020/21
                                            </option>
                                            <option value="2021"
                                                @if (old('entryyear') == '2005') {{ 'selected' }} @endif>2019/20
                                            </option>
                                            <option value="2004"
                                                @if (old('entryyear') == '2004') {{ 'selected' }} @endif>2018/19
                                            </option>
                                            <option value="2003"
                                                @if (old('entryyear') == '2003') {{ 'selected' }} @endif>2017/18
                                            </option>
                                            <option value="2002"
                                                @if (old('entryyear') == '2002') {{ 'selected' }} @endif>2016/17
                                            </option>


                                            <option value="2025"
                                                @if (old('entryyear') == '1998 AND') {{ 'selected' }} @endif>2026 And
                                                Above </option>

                                        </select>
                                    </div id="drop_down">
                                    @if ($errors->has('entryyear'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('entryyear') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>




{{--
                            <div class="row mb-3">
                                <label for="nationality"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Choose Nationality') }}</label>

                                <div class="col-md-6" id="county_drop_down">
                                    <div class="form-group">

                                        <select class="form-control" id="nationality" name="nationality" required>
                                            <option value="">--Select--</option>

                                            <option value="Nigeria"
                                                @if (old('nationality') == 'Nigeria') {{ 'selected' }} @endif>Nigeria
                                            </option>
                                            <option value="United State"
                                                @if (old('nationality') == 'United State') {{ 'selected' }} @endif>United State
                                            </option>
                                            <option value="United Kingdom"
                                                @if (old('nationality') == 'United Kingdom') {{ 'selected' }} @endif>United Kingdom
                                            </option>
                                            <option value="2021"
                                                @if (old('nationality') == 'Ghana') {{ 'selected' }} @endif>Ghana
                                            </option>
                                            <option value="Benin"
                                                @if (old('nationality') == 'Benin') {{ 'selected' }} @endif>Benin Republic
                                            </option>
                                            <option value="South Africa"
                                                @if (old('nationality') == 'South Africa') {{ 'selected' }} @endif>South Africa
                                            </option>
                                            <option value="Togo"
                                                @if (old('nationality') == 'Togo') {{ 'selected' }} @endif>Togo
                                            </option>
                                            <option value="Cameroun"
                                                @if (old('nationality') == 'Cameroun') {{ 'selected' }} @endif>Cameroun
                                            </option>
                                            <option value="Ivory Coast"
                                                @if (old('nationality') == 'Ivory Coast') {{ 'selected' }} @endif>Côte d'Ivoire
                                            </option>


                                            <option value="Other Nationality"
                                                @if (old('nationality') == 'Other Nationality') {{ 'selected' }} @endif>Other Countries
                                                </option>

                                        </select>
                                    </div id="drop_down">
                                    @if ($errors->has('nationality'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nationality') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> --}}




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
