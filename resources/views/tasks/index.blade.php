@extends('layouts.app')

@section('content')
<div class="md:mx-4 relative overflow-hidden">
    <main class="h-full flex flex-col overflow-auto">
        <task-list :initial-data="{{ $tasks }}"></task-list>
    </main>
</div>
@endsection
