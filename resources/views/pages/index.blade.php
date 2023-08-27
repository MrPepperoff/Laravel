@extends("layouts.{$layout}")
@section('content')
<main>
    <div class="container">
        <h1>Index</h1>
        <div class="row blogs">
        @foreach($posts as $post)
            <div class="col-12">
                <div class="row blog">
                    <div class="col-2 blog__info">
                        <a class="pull-left" href="#">
                            <div class="blog__img">
                                <img src="{{ asset('../resources/images') }}/{{ $post-> user-> image }}">
                            </div>
                            
                        </a>
                        <p class="blog__author">{{ $post-> user-> name}}</p>
                        <ul>
                            <li><i class="fa-brands fa-facebook-f"></i></li>
                            <li><i class="fa-brands fa-twitter"></i></li>
                            <li><i class="fa-brands fa-google-plus-g"></i></li>
                        </ul>
                    </div>
                    <div class=" col-10 blog__body">
                        <div class="blog__top">
                            <ul>
                                <li class="blog__title"><h4 >{{ $post -> title}}</h4></li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-calendar-days"></i> 2 days, 8 hours </span>
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-comment"></i> 2 comments</span>
                                </li>
                            </ul> 
                        </div>
                        
                        <p class="blog__content">{{ $post-> content }}</p>
                    </div>
                    
                </div>
            
            
        @endforeach
        </div>
    </div>
</main>
@endsection