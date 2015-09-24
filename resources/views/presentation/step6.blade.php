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
    <h2>Aligning Items Vertically</h2>
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:stretch;">
        <div style="display:flex;flex-direction:row;justify-content:space-around;">
            <div>
                Center 3 items in a tall div<br/>
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