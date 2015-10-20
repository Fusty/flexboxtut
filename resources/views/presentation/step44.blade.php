@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection

@section("content")
    <div style="display:flex;flex-direction:row;justify-content:center;">
        <div style="max-width:900px;">
            <h3>Browser Support</h3>
            IE 10 support is partial, IE 11+ and Edge are fully supported<br/>
            Firefox, Chrome, Safari (iOS too), Opera and Android are fully supported<br/><br/>
            Basically you can use it. <a href="http://caniuse.com/#feat=flexbox">http://caniuse.com/#feat=flexbox</a><br/><br/>
            There is a polyfill for legacy support.  <a href="https://github.com/doctyper/flexie">https://github.com/doctyper/flexie</a>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection