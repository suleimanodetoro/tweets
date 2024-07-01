<div class="row">
    <form action="{{ route('idea.create') }}" method="post">
        @csrf
        <div class="mb-3">
            <textarea name="idea" class="form-control" id="idea" rows="3"></textarea>
        </div>
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>

<!-- another option is to run it like so 
<form action="{{url('post')}}" method="post">

-->