@extends("layouts.main")
@section("content")

    <style>
        .categories{
            display: flex;
            list-style: none;
        }

        .categories > li{
            margin: 0 10px;
        }
    </style>
<main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Категории ({{$categoriesCount}})</h1>
            <section class="featured-posts-section mb-3">
                    <ul class="categories">
                        @foreach($categories as $category)
                        <li><a href="{{route("category.post.index",$category->id)}}">{{$category->title}}</a></li>
                        @endforeach
                    </ul>

            </section>

        </div>

    </main>
@endsection
