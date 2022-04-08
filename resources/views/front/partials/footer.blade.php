<div class="col-lg-12">
    <ul class="social-icons">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-rss"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
    </ul>
</div>
<div class="col-lg-12">
    <p class="copyright">{{ $footers[0]->copyright }}

        <br>{!! str_replace(
    ['(', ')'],
    [
        '<a rel="sponsored" href="https://templatemo.com"
        target="_blank">',
        '</a>',
    ],
    $footers[0]->designed,
) !!}
    </p>
</div>
</div>
</div>
</section>
