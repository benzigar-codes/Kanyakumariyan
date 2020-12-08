@extends('template.admin')

@section('title','Admin')

@section('events','border-l-4 border-white bg-green-800')

@section('content')
    @livewire('admin.events')
@endsection