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
            <h3>Browser Shortcomings</h3>
            Everything isn't perfect for flexbox yet.<br/>
            Internet Explorer is the primary culprit.  It seems to do goofy<br/>
            things with <code>min-height</code> on items that will flex vertically.<br/>
            There's also an issue with unitless <code>flex-basis</code> values being ignored.<br/><br/>
            In other browsers things are pretty much ok.<br/>
            Safari has an issue with min/max height/width declarations<br/>
            when things are wrapping.<br/><br/>
            For a complete list visit the following:<br/>
            <a href="https://github.com/philipwalton/flexbugs">https://github.com/philipwalton/flexbugs</a>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection