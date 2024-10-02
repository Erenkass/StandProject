@extends('frontend.layout.layout')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('css/mainn.min.css')}}">

    <div id="main-content">
            <div data-elementor-type="wp-post" data-elementor-id="12" class="elementor elementor-12">
                <section id="main-page"
                    class="elementor-section elementor-top-section elementor-element elementor-element-5da9167 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="5da9167" data-element_type="section"
                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div
                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fd723e0"
                            data-id="fd723e0" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-1aea5ca elementor-widget elementor-widget-slider_revolution"
                                    data-id="1aea5ca" data-element_type="widget"
                                    data-widget_type="slider_revolution.default">
                                    <div class="elementor-widget-container">
                                        <div class="wp-block-themepunch-revslider">
                                            <p class="rs-p-wp-fix"></p>
                                                <rs-module id="rev_slider_6_1" style data-version="6.7.15">
                                                    <rs-slides style="overflow: hidden; position: absolute;">
                                                        <rs-slide style="position: absolute;" data-key="rs-22"
                                                                  data-title="Slide"
                                                                  data-thumb="//eduma.thimpress.com/demo-main/wp-content/uploads/sites/95/2022/12/bg-slide-1-new-1-100x50.jpg"
                                                                  data-anim="adpr:false;ms:2000ms;" data-in="o:0;"
                                                                  data-out="a:false;">
                                                            <img decoding="async"
                                                                 src="{{$slider->image != null ? asset('img/slider/'.$slider->image) : ""}}"
                                                                 alt="bg slide 1 new 1" title="bg slide 1 new 1"
                                                                 width="1920" height="1000"
                                                                 class="rev-slidebg tp-rs-img rs-lazyload"
                                                                 data-lazyload="{{asset('img/slider/'.$slider->image) ?? ""}}"
                                                                 data-no-retina>
                                                            <rs-layer id="slider-6-slide-22-layer-1"
                                                                      class="thim-slider-sub-heading" data-type="text"
                                                                      data-color="rgba(252, 252, 252, 1)"
                                                                      data-xy="xo:16px,15px,15px,15px;y:m;yo:-103px,-107px,-45px,-51px;"
                                                                      data-text="l:30;" data-rsp_o="off"
                                                                      data-rsp_bd="off" data-frame_0="o:1;"
                                                                      data-frame_0_chars="d:5;y:100%;o:1;rZ:-35deg;"
                                                                      data-frame_0_mask="u:t;"
                                                                      data-frame_1="e:power4.inOut;st:300;sp:1800;sR:300;"
                                                                      data-frame_1_chars="d:5;" data-frame_1_mask="u:t;"
                                                                      data-frame_999="o:0;e:power2.in;st:w;sp:100;sR:6200;"
                                                                      style="z-index:7;font-family:'Roboto';">{{$slider->content}}
                                                            </rs-layer>
                                                            <h3 id="slider-6-slide-22-layer-2"
                                                                class="rs-layer thim-slider-heading" data-type="text"
                                                                data-color="rgba(255, 255, 255, 1)"
                                                                data-xy="xo:16px,14px,15px,15px;y:m;yo:-45px,-56px,-4px,-14px;"
                                                                data-text="s:70,60,40,30;l:80,100,50,60;fw:700,700,600,700;"
                                                                data-rsp_o="off" data-rsp_bd="off"
                                                                data-padding="t:2,2,2,0;" data-frame_0="o:1;"
                                                                data-frame_0_chars="d:5;x:105%;o:1;rX:45deg;rY:0deg;rZ:90deg;"
                                                                data-frame_0_mask="u:t;"
                                                                data-frame_1="e:power4.inOut;st:200;sp:2000;sR:200;"
                                                                data-frame_1_chars="d:5;" data-frame_1_mask="u:t;"
                                                                data-frame_999="o:0;e:power2.in;st:w;sp:100;sR:6400;"
                                                                style="z-index:8;font-family:'Roboto Slab';">{{$slider->name}}
                                                            </h3>
                                                            <rs-layer id="slider-6-slide-22-layer-5" data-type="shape"
                                                                      data-rsp_ch="on" data-text="w:normal;"
                                                                      data-dim="w:100%;h:100%;" data-basealign="slide"
                                                                      data-frame_1="st:250;sp:2000;"
                                                                      data-frame_999="o:0;st:w;"
                                                                      style="z-index:6;background-color:rgba(0,0,0,0.4);">
                                                            </rs-layer>
                                                            <rs-layer id="slider-6-slide-22-layer-6" data-type="text"
                                                                      data-color="rgba(191,185,184,1)||rgba(191, 185, 184, 0)||rgba(191, 185, 184, 0)||rgba(191, 185, 184, 0)"
                                                                      data-xy="x:c;xo:-2px,-2px,0,0;y:b;yo:16px,16px,30px,20px;"
                                                                      data-text="s:17,17,14,14;l:17,17,14,14;a:center;"
                                                                      data-dim="w:60px,60px,auto,auto;h:40px,40px,auto,auto;"
                                                                      data-actions="o:click;a:scrollbelow;offset:0;sp:300;e:none;"
                                                                      data-basealign="slide" data-rsp_o="off"
                                                                      data-rsp_bd="off"
                                                                      data-padding="t:10;r:20;b:10;l:20;"
                                                                      data-frame_1="e:power2.inOut;st:500;"
                                                                      data-frame_999="o:0;e:nothing;st:w;sp:100;"
                                                                      data-frame_hover="c:#fff;oX:50;oY:50;sp:0;"
                                                                      style="z-index:9;font-family:'Roboto Slab';cursor:pointer;">
                                                                <div class="thim-click-to-bottom"><i
                                                                        class="fa  fa-chevron-down"></i></div>
                                                            </rs-layer>
                                                        </rs-slide>
                                                    </rs-slides>
                                                </rs-module>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <h1 style="text-align: center; font-size: 2.5rem; margin-top: 20px;">Fuar Ve Stand Hizmetleri</h1>
                <section id="about"
                    class="elementor-section elementor-top-section elementor-element elementor-element-d65ec78 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="d65ec78" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-custom">
                        <div
                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-611078a"
                            data-id="611078a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-d4c132c elementor-widget thim-ekits-heading elementor-widget-thim-heading"
                                    data-id="d4c132c" data-element_type="widget"
                                    data-widget_type="thim-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="sc_heading "><h2 class="title">HAKKIMIZDA </h2>
                                            <div class="sub-heading"><p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="thim-ekits-event-style elementor-element elementor-element-4514e48 elementor-widget elementor-widget-thim-list-event"
                                    data-id="4514e48" data-element_type="widget"
                                    data-widget_type="thim-list-event.default">
                                    <div class="elementor-widget-container">
                                        @foreach($abouts as $about)
                                        <div class="thim-list-event">
                                            <div class="item-event post-3063 tp_event type-tp_event status-publish has-post-thumbnail hentry pmpro-has-access">
                                                <div class="image"><img loading="lazy" decoding="async"
                                                                        src="{{asset('img/about/'.$about->image)}}"
                                                                        alt="courses 14" title="courses 14" style="width:300px;height:200px"
                                                                        ></div>
                                                <div class="event-wrapper">
                                                    <h5 class="title">{{$about->name}}</h5>

                                                    <div class="description">
                                                        {{$about->content}}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="works"
                    class="elementor-section elementor-top-section elementor-element elementor-element-3acc908 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="3acc908" data-element_type="section"
                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-custom">
                        <div
                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f1413c6"
                            data-id="f1413c6" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-1a40905 elementor-widget thim-ekits-heading elementor-widget-thim-heading"
                                    data-id="1a40905" data-element_type="widget"
                                    data-widget_type="thim-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="sc_heading "><h2 class="title">ÇALIŞMALARIMIZ </h2>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-4e16875 thim-ekits-post__thumbnail-position-top elementor-widget elementor-widget-thim-ekits-list-blog"
                                    data-id="4e16875" data-element_type="widget"
                                    data-settings="{&quot;slidesPerGroup&quot;:1,&quot;slider_show_arrow&quot;:&quot;yes&quot;,&quot;slider_show_pagination&quot;:&quot;bullets&quot;,&quot;slider_loop&quot;:&quot;yes&quot;,&quot;slidesPerView_tablet&quot;:2,&quot;slidesPerView_mobile&quot;:1,&quot;spaceBetween_mobile&quot;:20,&quot;slidesPerGroup_mobile&quot;:1,&quot;slidesPerView&quot;:3,&quot;spaceBetween&quot;:30,&quot;slider_speed&quot;:1000}"
                                    data-widget_type="thim-ekits-list-blog.default">
                                    <div class="elementor-widget-container">
                                        <div class="thim-slider-pagination thim-bullets"></div>
                                        <div class="thim-slider-nav thim-slider-nav-prev hidden-nav-mobile">
                                            <i aria-hidden="true" class="tk tk-angle-left"></i></div>
                                        <div class="thim-slider-nav thim-slider-nav-next hidden-nav-mobile">
                                            <i aria-hidden="true" class="tk tk-angle-right"></i></div>
                                        <div class="thim-ekits-post thim-ekits-sliders swiper">
                                            <div class="swiper-wrapper">
                                                @foreach($works as $work)
                                                <div
                                                    class="thim-ekits-post__article swiper-slide post-4515 post type-post status-publish format-gallery has-post-thumbnail hentry category-business tag-course tag-wordpress post_format-post-format-gallery pmpro-has-access">
                                                    <div class="thim-ekits-post__thumbnail">
                                                        <a class="post-thumbnail"
                                                           href="{{asset('img/work/'.$work->image)}}">
                                                            <img loading="lazy" decoding="async" style="width: 100%; height: 560px; object-fit: cover"
                                                                 src="{{asset('img/work/'.$work->image)}}"
                                                                 class="attachment-medium size-medium wp-image-11366"
                                                                 alt="courses 7"
                                                                 sizes="(max-width: 360px) 100vw, 360px"/><i
                                                                aria-hidden="true"
                                                                class="tk tk-alternate-external-link"></i> </a>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="contact"
                    class="elementor-section elementor-top-section elementor-element elementor-element-82f9fc1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="82f9fc1" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-custom">
                        <div
                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-356c7f3"
                            data-id="356c7f3" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-e7bb2ca thim-ekits-heading-text-center elementor-widget thim-ekits-heading elementor-widget-thim-heading"
                                    data-id="e7bb2ca" data-element_type="widget"
                                    data-widget_type="thim-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="sc_heading text-center"><h2 class="title">HiZMETLERİMİZ </h2>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-3e75865 elementor-widget elementor-widget-thim-ekits-testimonial"
                                    data-id="3e75865" data-element_type="widget"
                                    data-settings="{&quot;slidesPerView_tablet&quot;:3,&quot;slidesPerView_mobile&quot;:3,&quot;slidesPerView&quot;:5,&quot;spaceBetween&quot;:20,&quot;centered_slides&quot;:&quot;yes&quot;,&quot;slider_loop&quot;:&quot;yes&quot;,&quot;spaceBetween_mobile&quot;:20,&quot;slider_speed&quot;:1000}"
                                    data-widget_type="thim-ekits-testimonial.default">
                                    <div class="elementor-widget-container">
                                        <div class="thim-slider-pagination thim-"></div>
                                        <div class="thim-ekits-testimonial__inner thim-ekits-thumb-gallery">
                                            <div class="thim-ekits-testimonial__avatars thim-ekits-sliders swiper">
                                                <div class="thim-ekits-testimonial__avatars-swapper swiper-wrapper">
                                                    @foreach($services as $service)
                                                    <div class="thim-ekits-testimonial__avatar swiper-slide">
                                                        <div class="thim-ekits-testimonial__image">
                                                            <img loading="lazy" decoding="async" style="width:65px;height:65px"
                                                                 src="{{asset('img/icon/'.$service->image)}}"
                                                                 class="attachment-full size-full wp-image-2922"
                                                                 alt="team 3"
                                                                 sizes="(max-width: 200px) 100vw, 200px"/></div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div
                                                class="thim-ekits-testimonial__content thim-ekits-gallery-thumbs swiper swiper-container">
                                                <div class="thim-ekits-testimonial__content-swapper swiper-wrapper">
                                                    @foreach($services as $service)
                                                    <div class="thim-ekits-testimonial__article swiper-slide">
                                                        <div class="thim-ekits-testimonial__client-info">
                                                            <p class="thim-ekits-testimonial__name">{{$service->name}}</p>
                                                        </div>
                                                        <div class="thim-ekits-testimonial__client-content">
                                                            <p>{{$service->content}}</p></div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
                @include('frontend.inc.footer')
        </div>
        <div class="footer-bottom">
            <div class="container">

            </div>
        </div>
    </div>
    <div class="scroll-to-top" id="back-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
</div>

<div class="gallery-slider-content"></div>
@endsection
