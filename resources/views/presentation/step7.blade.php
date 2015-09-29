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
                Center 3 items in a tall div<br/>
                stretch center item twice as much as the others<br/>
                <code>
                    display:flex;<br/>
                    flex-direction:column;<br/>
                </code>
                on the parent<br/>
                <code>
                    flex-grow:1;<br/>
                </code>
                on the first and last items<br/>
                <code>
                    flex-grow:2;<br/>
                </code>
                on the middle item<br/>

            </div>
            <div class="parent" style="display:flex;flex-direction:column;min-height:300px">
                <div class="child" style="flex-grow:1;">
                    Item 1
                </div>
                <div class="child" style="flex-grow:2;">
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