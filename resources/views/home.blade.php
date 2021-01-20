@extends ('layout')
@section ('content')

<h3 class="center">Juror Information</h3>
<div class="center gray">
    If you have been summoned for jury duty, you can find your record by filling in your
    Driver's License and Date of Birth below.
</div>
<form method="POST" action="/jurors">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Driver's License Number:</label><br>
        <input type="text" class="form-control" name="id" value="{{ $id ?? '' }}" required><br>
    </div>
    <div class="mb-3">
        <label for="id" class="form-label">DOB:</label><br>
        <input type="date" class="form-control" name="dob" value="{{ $dob ?? '' }}" required><br>
    </div>
    <input type="submit" class="btn btn-primary" value="Submit">
    @if (session('message'))
    <div class="session-message">{{ session('message') }}</div>
    @endif
    <div class="session-message">{{ $err ?? '' }}</div>
</form> 

@endsection