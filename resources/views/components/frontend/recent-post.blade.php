<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
    <div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="mb-0">Posts récents</h3>
    </div>
    @foreach($blogs as $recentBlog)
        <div class="d-flex rounded overflow-hidden mb-3">
            <img class="img-fluid" src="{{asset('storage/'.$recentBlog->image)}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">
                {{$recentBlog->title}}
            </a>
        </div>
    @endforeach


</div>
