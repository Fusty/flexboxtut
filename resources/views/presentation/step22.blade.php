@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">Aligning Items (align-items)</div>
@endsection

@section("content")
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:stretch;">
        <div style="display:flex;flex-direction:row;justify-content:space-around;">
            <div>
                Align them with the item's baseline (Item 2 has padding-top:40px;)<br/>
                <code>
                    display:flex;<br/>
                    flex-direction:row;<br/>
                    flex-wrap:wrap;<br/>
                    justify-content:space-around;<br/>
                    align-items:baseline;<br/>
                </code>
                on the parent<br/>
                <h3>What's going on here?</h3>
                <code>align-items:baseline;</code> is a useful/weird one.<br/>
                It aligns the child element with the most extreme baseline.<br/>
                It basically keeps text nicely aligned.  I like this one.
            </div>
            <div class="parent" style="display:flex;flex-direction:row;flex-wrap:wrap;justify-content:space-around;align-items:baseline;min-width:600px">
                <div class="child">
                    Item 1
                </div>
                <div class="child" style="padding-top:40px;">
                    Item 2<br/>
                    And some more<br/>
                    text after a<br/>
                    linebreak
                </div>
                <div class="child">
                    Item 3<br/>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection