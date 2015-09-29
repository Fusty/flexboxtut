@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">Aligning Items Horizontally</div>
@endsection

@section("content")
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:stretch;">
        <div style="display:flex;flex-direction:row;justify-content:space-around;">
            <div>
                One item centered horizontally<br/>
                <code>
                    display:flex;<br/>
                    flex-direction:row;<br/>
                    justify-content:center;<br/>
                </code>
                on the parent<br/>

            </div>
            <div class="parent" style="display:flex;flex-direction:row;justify-content:center;min-width:600px">
                <div class="child">
                    Lonely Item
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection