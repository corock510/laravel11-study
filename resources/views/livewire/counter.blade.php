@extends('components.layouts.app')

@section('title', 'Counter')

@section('content')
    <div>
        <h1>{{ $count }}</h1>

        <button wire:click="increment">+</button>

        <button wire:click="decrement">-</button>
    </div>
@endsection
