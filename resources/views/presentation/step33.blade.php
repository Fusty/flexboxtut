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
    <h2>Main Axis vs. Cross Axis (FIGHT!)</h2>
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:stretch;">
        <div style="display:flex;flex-direction:row;justify-content:space-around;">
            <div style="">
                <h2>Properties affecting Cross Axis;</h2>
                <ul>
                    <li>align-items (item alignment along cross axis)</li>
                    <li>align-content (wrapped row/column spacing along cross axis)</li>
                    <li>align-self (individual item alignment along cross axis)</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection