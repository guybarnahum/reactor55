
@if ( strpos( $person->roles, $role ) !== false )

<!-- {{ $person->name }} -->

<div class="portfolio-item infinite-item col-md-4 col-sm-4'
            {{ $person->tags }}">
    <figure class="portfolio-figure">
        <img class="svg-inject"
            src="{{ asset( $person->large_photo ) }}" alt="{{ $person->name }}"/>
        <figcaption class="box-caption">
            <h4>{{ $person->moto }}</h4>

            @if (isset($person->linkedin))
            <a class="link" href="{{ $person->linkedin }}" target="_blank">
                <i class="fa fa-linkedin"></i>
            </a>
            @endif

            @if (isset($person->facebook))
            <a class="more" href="{{ $person->facebook }}" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>
            @endif
        </figcaption>
    </figure>
    <h3 class="text-center">
        <a href="{{ $person->linkedin or '#' }}" target="_blank">{{ $person->name }}</a>
        <small class="block">{{ $person->title }}</small>
    </h3>
    <p class="text-center ">{{ $person->desc }}</p>
</div>

@endif