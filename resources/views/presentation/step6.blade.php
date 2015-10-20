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
                3 items in a tall div<br/>
                stretch them equally to fit div<br/>
                <code>
                    display:flex;<br/>
                    flex-direction:column;<br/>
                </code>
                on the parent<br/>
                <code>
                    flex-grow:1;<br/>
                </code>
                on the items
                <h3>What's going on here?</h3>
                <code>display:flex;</code> - this element will lay out it's<br/>
                content according to the flexbox model<br/>
                <code>flex-direction:column;</code> - child elements<br/>
                will be laid out vertically<br/>
                <code>flex-grow:1;</code> - child elements will expand<br/>
                to fill the container
            </div>
            <div class="parent" style="display:flex;flex-direction:column;min-height:300px">
                <div class="child" style="flex-grow:1;">
                    Item 1
                </div>
                <div class="child" style="flex-grow:1;">
                    Item 2
                </div>
                <div class="child" style="flex-grow:1;">
                    Item 3
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection