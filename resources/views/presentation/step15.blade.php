@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">Wrapping Items (flex-wrap)</div>
@endsection

@section("content")
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:stretch;">
        <div style="display:flex;flex-direction:row;justify-content:space-around;">
            <div>
                Wrapping horizontal items in a row (Have fun misspelling "wrap" "warp")<br/>
                <code>
                    display:flex;<br/>
                    flex-direction:row;<br/>
                    flex-wrap:wrap;<br/>
                    justify-content:flex-start;<br/>
                </code>
                on the parent<br/>

            </div>
            <div class="parent" style="display:flex;flex-direction:row;flex-wrap:wrap;justify-content:flex-start;min-width:600px">
                <div class="child">
                    Item 1
                </div>
                <div class="child">
                    Item 2
                </div>
                <div class="child">
                    Item 3
                </div>
                <div class="child">
                    Item 4
                </div>
                <div class="child">
                    Item 5
                </div>
                <div class="child">
                    Item 6
                </div>
                <div class="child">
                    Item 7
                </div>
                <div class="child">
                    Item 8
                </div>
                <div class="child">
                    Item 9
                </div>
                <div class="child">
                    Item 10
                </div>
                <div class="child">
                    Item 11
                </div>
                <div class="child">
                    Item 12
                </div>
                <div class="child">
                    Item 13
                </div>
                <div class="child">
                    Item 14
                </div>
                <div class="child">
                    Item 15
                </div>
                <div class="child">
                    Item 16
                </div>
                <div class="child">
                    Item 17
                </div>
                <div class="child">
                    Item 18
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection