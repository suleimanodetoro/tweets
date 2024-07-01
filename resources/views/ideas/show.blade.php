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
        {{-- @include('shared.success-message')
            <h4>Share your ideas</h4>
            @include('shared.submit-idea') --}}
            
        <div class="mt-3">
            @include('shared.idea-card', ['idea' => $idea])
        </div>


    </div>

    <!-- Right Sidebar -->
    <div class="col-3">
        <div class="card">
            <div class="card-header pb-0 border-0">
                <h5>Search</h5>
            </div>
            <div class="card-body">
                <input placeholder="Search..." class="form-control w-100" type="text" id="search">
                <button class="btn btn-dark mt-2">Search</button>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header pb-0 border-0">
                <h5>Who to follow</h5>
            </div>
            <div class="card-body">
                <div class="hstack gap-2 mb-3">
                    <div class="avatar">
                        <a href="#!"><img class="avatar-img rounded-circle" src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                    </div>
                    <div class="overflow-hidden">
                        <a class="h6 mb-0" href="#!">XYZ</a>
                        <p class="mb-0 small text-truncate">@Suleiman</p>
                    </div>
                    <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i class="fa-solid fa-plus"></i></a>
                </div>
                <div class="hstack gap-2 mb-3">
                    <div class="avatar">
                        <a href="#!"><img class="avatar-img rounded-circle" src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt=""></a>
                    </div>
                    <div class="overflow-hidden">
                        <a class="h6 mb-0" href="#!">Mario Brother</a>
                        <p class="mb-0 small text-truncate">@Mario</p>
                    </div>
                    <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i class="fa-solid fa-plus"></i></a>
                </div>
                <div class="d-grid mt-3">
                    <a class="btn btn-sm btn-primary-soft" href="#!">Show More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection