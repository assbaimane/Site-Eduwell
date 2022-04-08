<section class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="header-text">
                    <h6>{{ $titres[0]->soustitre }}</h6>
                    <h2>{!! str_replace(['(', ')'], ['<em>', '</em>'], $titres[0]->titre) !!}</h2>
                    <div class="main-button-gradient">
                        <div class="scroll-to-section"><a href="#contact-section">{{ $banners[0]->bouton }}</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-image">
                    <img src={{ asset('/images/banner-right-image.png') }} alt="">
                </div>
            </div>
        </div>
    </div>
</section>
