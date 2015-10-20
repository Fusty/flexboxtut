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
            <h3>That's it!</h3>
            Thanks for lunching and learning.<br/><br/>
            I'll be putting any further demos I create up on CodePen<br/>
            <a href="http://codepen.io/collection/ANqBaK/">Flexbox Demo Collection</a><br/><br/>
            You can get snag this entire presentation off of github (it's a laravel project)<br/>
            <a href="https://github.com/Fusty/flexboxtut">https://github.com/Fusty/flexboxtut</a>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection