<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>{{ $titres[3]->soustitre }}</h6>
                    <h4>{!! str_replace(['(', ')'], ['<em>', '</em>'], $titres[3]->titre) !!}</h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
                    <div class="item">
                        <p>{{ $testimonials[0]->avis }}</p>
                        <h4>{{ $testimonials[0]->nom }}</h4>
                        <span>{{ $testimonials[0]->position }}</span>
                        <img src={{ asset('/images/quote.png') }} alt="">
                    </div>
                    <div class="item">
                        <p>{{ $testimonials[1]->avis }}</p>
                        <h4>{{ $testimonials[1]->nom }}</h4>
                        <span>{{ $testimonials[1]->position }}</span>
                        <img src={{ asset('/images/quote.png') }} alt="">
                    </div>
                    <div class="item">
                        <p>{{ $testimonials[2]->avis }}</p>
                        <h4>{{ $testimonials[2]->nom }}</h4>
                        <span>{{ $testimonials[2]->position }}</span>
                        <img src={{ asset('/images/quote.png') }} alt="">
                    </div>
                    <div class="item">
                        <p>{{ $testimonials[3]->avis }}</p>
                        <h4>{{ $testimonials[3]->nom }}</h4>
                        <span>{{ $testimonials[3]->position }}</span>
                        <img src={{ asset('/images/quote.png') }} alt="">
                    </div>
                    <div class="item">
                        <p>{{ $testimonials[4]->avis }}</p>
                        <h4>{{ $testimonials[4]->nom }}</h4>
                        <span>{{ $testimonials[4]->position }}</span>
                        <img src={{ asset('/images/quote.png') }} alt="">
                    </div>
                    <div class="item">
                        <p>{{ $testimonials[5]->avis }}</p>
                        <h4>{{ $testimonials[5]->nom }}</h4>
                        <span>{{ $testimonials[5]->position }}</span>
                        <img src={{ asset('/images/quote.png') }} alt="">
                    </div>
                    <div class="item">
                        <p>{{ $testimonials[0]->avis }}</p>
                        <h4>{{ $testimonials[0]->nom }}</h4>
                        <span>{{ $testimonials[0]->position }}</span>
                        <img src={{ asset('/images/quote.png') }} alt="">
                    </div>
                    <div class="item">
                        <p>{{ $testimonials[1]->avis }}</p>
                        <h4>{{ $testimonials[1]->nom }}</h4>
                        <span>{{ $testimonials[1]->position }}</span>
                        <img src={{ asset('/images/quote.png') }} alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
