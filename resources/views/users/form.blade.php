<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lastname" class="form-label">{{ __('Lastname') }}</label>
            <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname', $user?->lastname) }}" id="lastname" placeholder="Lastname">
            {!! $errors->first('lastname', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="firstname" class="form-label">{{ __('Firstname') }}</label>
            <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname', $user?->firstname) }}" id="firstname" placeholder="Firstname">
            {!! $errors->first('firstname', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="middlename" class="form-label">{{ __('Middlename') }}</label>
            <input type="text" name="middlename" class="form-control @error('middlename') is-invalid @enderror" value="{{ old('middlename', $user?->middlename) }}" id="middlename" placeholder="Middlename">
            {!! $errors->first('middlename', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="matriculation_number" class="form-label">{{ __('Matriculation Number') }}</label>
            <input type="text" name="matriculation_number" class="form-control @error('matriculation_number') is-invalid @enderror" value="{{ old('matriculation_number', $user?->matriculation_number) }}" id="matriculation_number" placeholder="Matriculation Number">
            {!! $errors->first('matriculation_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="vocations" class="form-label">{{ __('Vocations') }}</label>
            <input type="text" name="vocations" class="form-control @error('vocations') is-invalid @enderror" value="{{ old('vocations', $user?->vocations) }}" id="vocations" placeholder="Vocations">
            {!! $errors->first('vocations', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="level" class="form-label">{{ __('Level') }}</label>
            <input type="text" name="level" class="form-control @error('level') is-invalid @enderror" value="{{ old('level', $user?->level) }}" id="level" placeholder="Level">
            {!! $errors->first('level', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="academic_session" class="form-label">{{ __('Academic Session') }}</label>
            <input type="text" name="academic_session" class="form-control @error('academic_session') is-invalid @enderror" value="{{ old('academic_session', $user?->academic_session) }}" id="academic_session" placeholder="Academic Session">
            {!! $errors->first('academic_session', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="college" class="form-label">{{ __('College') }}</label>
            <input type="text" name="college" class="form-control @error('college') is-invalid @enderror" value="{{ old('college', $user?->college) }}" id="college" placeholder="College">
            {!! $errors->first('college', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="department" class="form-label">{{ __('Department') }}</label>
            <input type="text" name="department" class="form-control @error('department') is-invalid @enderror" value="{{ old('department', $user?->department) }}" id="department" placeholder="Department">
            {!! $errors->first('department', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="gender" class="form-label">{{ __('Gender') }}</label>
            <input type="text" name="gender" class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender', $user?->gender) }}" id="gender" placeholder="Gender">
            {!! $errors->first('gender', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        {{--
        <div class="form-group mb-2 mb20">
            <label for="status" class="form-label">{{ __('Status') }}</label>
            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $user?->status) }}" id="status" placeholder="Status">
            {!! $errors->first('status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="enrolment" class="form-label">{{ __('Enrolment') }}</label>
            <input type="text" name="enrolment" class="form-control @error('enrolment') is-invalid @enderror" value="{{ old('enrolment', $user?->enrolment) }}" id="enrolment" placeholder="Enrolment">
            {!! $errors->first('enrolment', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="general" class="form-label">{{ __('General') }}</label>
            <input type="text" name="general" class="form-control @error('general') is-invalid @enderror" value="{{ old('general', $user?->general) }}" id="general" placeholder="General">
            {!! $errors->first('general', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="admin" class="form-label">{{ __('Admin') }}</label>
            <input type="text" name="admin" class="form-control @error('admin') is-invalid @enderror" value="{{ old('admin', $user?->admin) }}" id="admin" placeholder="Admin">
            {!! $errors->first('admin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="created_at" class="form-label">{{ __('Created At') }}</label>
            <input type="text" name="created_at" class="form-control @error('created_at') is-invalid @enderror" value="{{ old('created_at', $user?->created_at) }}" id="created_at" placeholder="Created At">
            {!! $errors->first('created_at', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
--}}
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>