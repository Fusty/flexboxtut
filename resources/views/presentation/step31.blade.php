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
                <h3>
                    I've been throwing a lot at you, but have you noticed some css properties affect different axes?
                </h3>
                There are 2 axes in any flexbox container;<br/>
                Main Axis: The axis along which you've set the flex-direction<br/>
                Cross Axis:  Perpendicular to the Main Axis<br/><br/>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection