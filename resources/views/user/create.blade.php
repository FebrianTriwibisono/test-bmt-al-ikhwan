//views/post/create.blade.php
@extends('layouts.app')
@section('title', 'Buat User Baru')
@section('content')
<div class="wrapper">
  <h1>Buat User Baru</h1>
  
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
  <form method="POST" action="{{ url('users.store') }}">
    @csrf
    <input name="nama" type="text" placeholder="Tulis Nama"> 
    <input name="email" type="text" placeholder="Tulis Email">
    <input name="password" type="text" placeholder="Tulis Password">
    <input name="phone_number" type="text" placeholder="Tulis Nomor Telepon">
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection
