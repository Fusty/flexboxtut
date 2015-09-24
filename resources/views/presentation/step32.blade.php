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
                <h2>Properties affecting Main Axis;</h2>
                <ul>
                    <li>justify-content (item placement along main axis)</li>
                    <li>flex-grow (item growth along msain axis)</li>
                    <li>flex-shrink (item shrinkage along main axis)</li>
                    <li>flex-basis (confusing spacing property along main axis)</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection