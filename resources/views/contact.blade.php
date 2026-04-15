@extends('layout.master')

@section('title', 'Contact')

@section('content')
    <h1><?php echo $page_discripion; ?></h1>
    <p>{!! $page_contact !!}</p>
    <hr>
    <p>{{ $page_discripion }}</p>

    {{-- Google Login Button --}}
    <div style="margin: 30px 0;">
        <a href="{{ url('auth/google') }}" style="display:inline-block;padding:10px 20px;background:#4285F4;color:#fff;border-radius:4px;text-decoration:none;font-weight:bold;">
            <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google" style="width:20px;vertical-align:middle;margin-right:8px;">
            تسجيل الدخول باستخدام جوجل
        </a>
    </div>

    {{-- Validation/Error Message Example --}}
    @if(session('error'))
        <div style="color:red;">{{ session('error') }}</div>
    @endif
    @if(session('success'))
        <div style="color:green;">{{ session('success') }}</div>
    @endif
@stop









