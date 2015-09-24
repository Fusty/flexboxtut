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
    <h2>Align Wrapped Rows (align-content)</h2>
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:stretch;">
        <div class="row">
            <div class="col-xs-6">
                Spaced out from top to bottom<br/>
                <code>
                    display:flex;<br/>
                    flex-direction:row;<br/>
                    flex-wrap:wrap;<br/>
                    justify-content:flex-start;<br/>
                    align-items:flex-start;<br/>
                    align-content:space-between;<br/>
                </code>
                on the parent<br/>

            </div>
            <div class="parent col-xs-6" style="display:flex;flex-direction:row;flex-wrap:wrap;justify-content:flex-start;align-items:flex-start;align-content:space-between;min-height:400px;padding:0px;">
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
                <div class="child">
                    Item 19
                </div>
                <div class="child">
                    Item 20
                </div>
                <div class="child">
                    Item 21
                </div>
                <div class="child">
                    Item 22
                </div>
                <div class="child">
                    Item 23
                </div>
                <div class="child">
                    Item 24
                </div>
                <div class="child">
                    Item 25
                </div>
                <div class="child">
                    Item 26
                </div>
                <div class="child">
                    Item 27
                </div>
                <div class="child">
                    Item 28
                </div>
                <div class="child">
                    Item 29
                </div>
                <div class="child">
                    Item 30
                </div>
                <div class="child">
                    Item 31
                </div>
                <div class="child">
                    Item 32
                </div>
                <div class="child">
                    Item 33
                </div>
                <div class="child">
                    Item 34
                </div>
                <div class="child">
                    Item 35
                </div>
                <div class="child">
                    Item 36
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection