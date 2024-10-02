<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<footer id="colophon" class=" site-footer has-footer-bottom">
    <div class="footer">
        <div class="container">
            <div class="row">
                <aside id="text-1210019" class="widget widget_text footer_widget"> <div class="textwidget"> <div data-elementor-type="wp-post" data-elementor-id="8920" class="elementor elementor-8920">
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-3683d89 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3683d89" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                <div class="elementor-container elementor-column-gap-custom">
                                    <div class="col-md-6">
                                        <div data-id="b0d2307" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-18fb26a elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="18fb26a" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-element elementor-element-ceb6744 elementor-widget thim-ekits-heading elementor-widget-thim-heading" data-id="ceb6744" data-element_type="widget" data-widget_type="thim-heading.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_heading "><h4 class="title">İLETİŞİM </h4></div> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1f9106d elementor-widget elementor-widget-thim-ekits-header-info" data-id="1f9106d" data-element_type="widget" data-widget_type="thim-ekits-header-info.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="header-info-swapper">
                                                            <ul class="thim-header-info">
                                                                <li>
                                                                    <span><i aria-hidden="true" class="fab fa-whatsapp"></i></span>
                                                                    <a href="https://wa.me/+90{{str_replace(' ', '', $contact->whatsapp)}}" target="_blank">{{$contact->whatsapp}}</a>
                                                                </li>
                                                                <li>
                                                                    <span><i aria-hidden="true" class="tk tk-phone"></i></span>
                                                                    <a href="tel:+90{{ ltrim(str_replace(' ', '', $contact->telephone), '0') }}">{{$contact->telephone}}</a>
                                                                </li>
                                                                <li>
                                                                    <span><i aria-hidden="true" class="tk tk-envelope"></i></span>
                                                                    <a href="mailto:{{$contact->email}}" class="__cf_email__" >{{$contact->email}}</a>
                                                                </li>
                                                                <li>
                                                                    <span><i aria-hidden="true" class="tk tk-map-marker"></i></span>
                                                                    {{$contact->address}}
                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ceb6744 elementor-widget thim-ekits-heading elementor-widget-thim-heading" data-id="ceb6744" data-element_type="widget" data-widget_type="thim-heading.default">
                                                <div class="elementor-widget-container">
                                                    <div class="sc_heading "><h4 class="title">HAKKIMIZDA </h4></div> </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ff87c16 elementor-widget elementor-widget-thim-ekits-header-info" data-id="ff87c16" data-element_type="widget" data-widget_type="thim-ekits-header-info.default">

                                                <p>{{$contact->about}}</p>
                                            </div>
                                        </div>

                                    </div>
                            </section>
                        </div>
                    </div>
                </aside> </div>
        </div>
    </div>
</footer>
