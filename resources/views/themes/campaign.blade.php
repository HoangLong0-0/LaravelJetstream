@extends("themes.layout")
@section("content")
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{$cmp->__get("image")}}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>
                                {{$cmp->__get("name")}}
                            </h2>
                            <p>
                                {{$cmp->Category->__get("name")}}
                            </p>
                            <p class="excert">
                                {{$cmp->__get("description")}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
