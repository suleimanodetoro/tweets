@extends('layout.layout')

@section('content')
<div class="row">
    <!-- Left Sidebar -->
    <div class="col-3">
        <div class="card overflow-hidden">
            <div class="card-body pt-3">
                <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>Explore</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>Feed</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>Terms</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>Support</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-footer text-center py-2">
                <a class="btn btn-link btn-sm" href="#">View Profile</a>
            </div>
        </div>
    </div>

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