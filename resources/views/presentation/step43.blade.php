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
            <h3>Shorthand</h3>
            There isn't a ton of shorthand for flexbox yet.<br/><br/>
            <code>flex: 1 0 auto</code> is short for<br/>
            <code>flex-grow: 1;</code><br/>
            <code>flex-shrink: 0;</code><br/>
            <code>flex-basis: auto;</code><br/><br/>
            <code>flex-flow: row nowrap;</code> is short for<br/>
            <code>flex-direction: row;</code><br/>
            <code>flex-wrap: nowrap;</code>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection