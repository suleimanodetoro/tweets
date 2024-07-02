@extends('layout.layout')

@section('content')
<div class="row">
    <!-- Left Sidebar -->
    @include('shared.left-sidebar')

    <!-- Main Content Area -->
    <div class="col-6">
        @include('shared.success-message')
        <h4>Share your ideas</h4>
        @include('shared.submit-idea')
        <hr>
        <!-- Loop through ideas and include the idea-card component for each -->
        @foreach($ideas as $idea)
        <div class="mt-3">
            @include('shared.idea-card', ['idea' => $idea])
        </div>
        @endforeach
        <!-- Ensure to style the pagination links as needed in the app service providers (>app>providers>appserviceproviders) -->
        <div class="mt-3">
            {{$ideas->links()}}

        </div>

    </div>

    <!-- Right Sidebar -->
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.follow-box')
    </div>
</div>
@endsection