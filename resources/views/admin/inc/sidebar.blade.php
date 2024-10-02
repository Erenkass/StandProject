
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#slider-menu" aria-expanded="false" aria-controls="slider-menu">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Slider</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="slider-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('slider.index')}}">Slider</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('slider.create')}}">Slider Ekle</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#about-menu" aria-expanded="false" aria-controls="about-menu">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Hakkımızda</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="about-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('about.index')}}">Hakkımızda</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('about.create')}}">Hakkımızda Ekle</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#services-menu" aria-expanded="false" aria-controls="services-menu">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Hizmetlerimiz</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="services-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('service.index')}}">Hizmetler</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('service.create')}}">Hizmet Ekle</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#works-menu" aria-expanded="false" aria-controls="works-menu">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Çalışmalarım</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="works-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('work.index')}}">Çalışmalarım</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('work.create')}}">Çalışma Ekle</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('contact.index')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">İletişim</span>
            </a>
        </li>
    </ul>
</nav>
<script>
    $(document).ready(function() {
        $('.nav-link').click(function() {
            // Tüm menü öğelerindeki active sınıfını kaldır
            $('.nav-link').removeClass('active');

            // Tıklanan menü öğesine active sınıfını ekle
            $(this).addClass('active');
        });
    });

</script>
