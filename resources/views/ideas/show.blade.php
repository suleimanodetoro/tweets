@extends('layout.layout')

@section('content')
<div class="row">
    <!-- Left Sidebar -->
    @include('shared.left-sidebar')

    <!-- Main Content Area -->
    <div class="col-6">
        <div class="mt-3">
            @include('shared.idea-card', ['idea' => $idea])
        </div>


    </div>

    <!-- Right Sidebar -->
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.follow-box')
    </div>
</div>
@endsection