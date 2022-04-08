<section class="services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>{{ $titres[1]->soustitre }}</h6>
                    <h4>{!! str_replace(['(', ')'], ['<em>', '</em>'], $titres[1]->titre) !!}</h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src={{ $services[0]->icone }} alt="">
                            </div>
                            <h4>{{ $services[0]->nom }}</h4>
                            <p>{{ $services[0]->description }}</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src={{ $services[1]->icone }} alt="">
                            </div>
                            <h4>{{ $services[1]->nom }}</h4>
                            <p>{{ $services[1]->description }}</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src={{ $services[2]->icone }} alt="">
                            </div>
                            <h4>{{ $services[2]->nom }}</h4>
                            <p>{{ $services[2]->description }}</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src={{ $services[3]->icone }} alt="">
                            </div>
                            <h4>{{ $services[3]->nom }}</h4>
                            <p>{{ $services[3]->description }}</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src={{ $services[4]->icone }} alt="">
                            </div>
                            <h4>{{ $services[4]->nom }}</h4>
                            <p>{{ $services[4]->description }}</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src={{ $services[5]->icone }} alt="">
                            </div>
                            <h4>{{ $services[5]->nom }}</h4>
                            <p>{{ $services[5]->description }}</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src={{ $services[6]->icone }} alt="">
                            </div>
                            <h4>{{ $services[6]->nom }}</h4>
                            <p>{{ $services[6]->description }}</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-item">
                            <div class="icon">
                                <img src={{ $services[7]->icone }} alt="">
                            </div>
                            <h4>{{ $services[7]->nom }}</h4>
                            <p>{{ $services[7]->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
