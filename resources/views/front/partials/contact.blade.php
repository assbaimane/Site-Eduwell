<section class="contact-us" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div id="map">

                    <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
                    {{-- <iframe
                        src="https://www.google.com/maps/embed/v1/search
                        ?key=YOUR_API_KEY
                        &q=
                        {!! str_replace([' '],['+'], $contacts[0]->map) !!}"
                        width="100%" height="420px" frameborder="0"
                        style="border:0; border-radius: 15px; position: relative; z-index: 2;"
                        allowfullscreen=""></iframe> --}}

                        {{-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=rue%20marie%20christine%2050&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> --}}
                    <iframe
                        src="https://maps.google.com/maps?q={!! str_replace([' '],['%20'], $contacts[0]->map) !!}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="100%" height="420px" frameborder="0"
                        style="border:0; border-radius: 15px; position: relative; z-index: 2;"
                        allowfullscreen=""></iframe>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-1">
                            <div class="contact-info">
                                <div class="icon">
                                    <i class="{{ $contacts[0]->icone1 }}"></i>
                                </div>
                                <h4>{{ $contacts[0]->contact1 }}</h4>
                                <span>{{ $contacts[0]->value_contact1 }}</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-info">
                                <div class="icon">
                                    <i class="{{ $contacts[0]->icone2 }}"></i>
                                </div>
                                <h4>{{ $contacts[0]->contact2 }}</h4>
                                <span>{{ $contacts[0]->value_contact2 }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h6>Contact us</h6>
                                <h4>Say <em>Hello</em></h4>
                                <p>IF you need a working contact form by PHP script, please visit TemplateMo's contact
                                    page for more info.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on"
                                    required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Your Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-gradient-button">Send
                                    Message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
