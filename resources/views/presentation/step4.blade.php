@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">Aligning Items Vertically</div>
@endsection

@section("content")
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:stretch;">
        <div style="display:flex;flex-direction:row;justify-content:space-around;">
            <div>
                Center 1 item in a tall div<br/>
                <code>
                    display:flex;<br/>
                    flex-direction:column;<br/>
                    justify-content:center;<br/>
                </code>
                All on the parent<br/>
                Nothing needed on the child
                <h3>What's going on here?</h3>
                <code>display:flex;</code> - this element will lay out it's<br/>
                content according to the flexbox model<br/>
                <code>flex-direction:column;</code> - child elements<br/>
                will be laid out vertically<br/>
                <code>justify-content:center;</code> - child elements will<br/>
                be centered in the container
            </div>
            <div class="parent" style="display:flex;flex-direction:column;justify-content:center;min-height:300px">
                <div class="child">
                    One Lonely Item
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection