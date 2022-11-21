@extends('layouts.app')

@section('content')
    <h2 class="mb-5 mt-5 ml-5">Settings</h2>
    @include('partials.profile.settings_form', ['user' => $user])
@endsection