@extends('layouts.base' )

@section('header')
@endsection

@section('content')

<section class="section swatch-red-white">
    <div class="container">
        <div class="row">
            @if (!isset($people))
            No people found
            @else
            <ul class="isotope-filters text-center underline-active">
                <li>
                    <a class="pseudo-border active" data-filter="*" href="#">
                    All
                    </a>
                </li>
                <br>
                <li>
                    <a class="pseudo-border" data-filter=".in-sf" href="#">
                    San Francisco
                    </a>
                </li>
                <li>
                    <a class="pseudo-border" data-filter=".in-tlv" href="#">
                    Tel Aviv
                    </a>
                </li>
                <br>
                <li>
                    <a class="pseudo-border" data-filter=".hw" href="#">
                    Hardware
                    </a>
                </li>
                <li>
                    <a class="pseudo-border" data-filter=".sw" href="#">
                    Software / User Experience
                    </a>
                </li>
                <li>
                    <a class="pseudo-border" data-filter=".pd" href="#">
                    Product Design
                    </a>
                </li>
                <li>
                    <a class="pseudo-border" data-filter=".vc" href="#">
                    Venture Capital
                    </a>
                </li>
            </ul>

            <div class="portfolio isotope no-transition portfolio-round row">

                @forelse ($people as $person)

                    @include('person',[ 'person' => $person, 'role' => 'principal' ] )

                @empty
                    No people found
                @endforelse
            </div>
            @endif
        </div>
    </div>
</section>
@endsection

@section('scripts')
@endsection
