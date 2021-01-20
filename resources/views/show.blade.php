@extends ('layout')
@section ('content')
<h3 class="center">Juror Information</h3>

    <div>Last name: {{ $juror->LAST_NAME }}</div>
    <div>First name: {{ $juror->FIRST_NAME }}</div>
    <div>Date of birth: {{ $juror->DOB }}</div>
    <div>Id: {{ $juror->id }}</div>
@endsection
