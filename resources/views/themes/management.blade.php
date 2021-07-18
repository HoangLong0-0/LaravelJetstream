@extends("themes.layout")
@section("content")
    <br><br>
    <h1>Your registered campaigns:</h1>
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
    @foreach($user->campaigns as $item)
        <article class="blog_item">
            <div class="blog_item_img">
                <img class="card-img rounded-0" src="{{$item->__get("image")}}" alt="">
            </div>

            <div class="blog_details">
                <a class="d-inline-block" href="{{url("user/campaigns/detail",["id"=>$item->id])}}">
                    <h2>{{$item->__get("name")}}</h2>
                </a>
                <a href="{{url("user/management/delete",["id"=>$item->id])}}" class="boxed_btn">Delete</a>
            </div>
            <p>
                Category: {{$item->Category->__get("name")}}
            </p>
        </article>
    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
