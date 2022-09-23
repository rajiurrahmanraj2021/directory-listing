@extends($theme.'layouts.app')
@section('title')
    @lang($title)
@endsection

@section('banner_heading')
    @lang($title)
@endsection

@section('content')
    <!-- POLICY -->
    <section style="padding: 120px 0"id="policy">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="heading-container">
                        <h3 class="heading text-center">@lang(@$title)</h3>
                    </div>
                </div>
            </div>
            <div class="policy wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
                @lang(@$description)
            </div>
        </div>
    </section>
    <!-- /POLICY -->
@endsection
