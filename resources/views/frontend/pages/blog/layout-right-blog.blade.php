<div class="blog_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Posts">
            <span class="input-group-btn">
									<button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
								</span>
        </div><!-- /input-group -->
        <div class="br"></div>
    </aside>
    <aside class="single_sidebar_widget author_widget">
        <img class="author_img img-fluid" src="img/blog/author.png" alt="">
        <h4>Charlie ALison Barber</h4>
        <p>Senior blog writer</p>

        <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend
            money
            on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
        <div class="social_icon">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
        </div>
        <div class="br"></div>
    </aside>
    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title">Bài viết phổ biến</h3>
        @forelse($blogPopular as $item)
            <div class="media post_item">
                <img src="{{asset($item->image)}}" alt="post">
                <div class="media-body">
                    <a href="{{route('detail-blog',$item->slug)}}">
                        <h3>{{$item->title}}</h3>
                    </a>
                    <p> {{$item->created_at}}</p>
                </div>
            </div>
        @empty
        @endforelse
        <div class="br"></div>
    </aside>
    <aside class="single_sidebar_widget newsletter_widget">
        <h4 class="widget_title">Bản tin</h4>
        <div id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                  method="get" class="subscribe_form relative">
                <div class="input-group d-flex flex-row">
                    <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                           required="" type="email">
                    <button class="btn sub-btn">
                        <span class="lnr lnr-arrow-right"></span>
                    </button>
                </div>
                <div class="mt-10 info"></div>
            </form>
        </div>
    </aside>
    <div class="br"></div>
    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title">Danh mục bài viết</h4>
        <ul class="list cat-list">
            @forelse($categories as $item)
                <li>
                    <a href="{{route('detail-category',$item->slug)}}" class="d-flex justify-content-between">
                        <p>{{$item->title}}</p>
                        <p>37</p>
                    </a>
                </li>
            @empty
            @endforelse
        </ul>
    </aside>
</div>
