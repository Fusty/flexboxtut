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
                3 items left aligned<br/>
                <code>
                    display:flex;<br/>
                    flex-direction:row;<br/>
                    justify-content:flex-start;<br/>
                </code>
                on the parent<br/>
                <h3>What's going on here?</h3>
                Now we're seeing the power of <code>justify-content</code>.<br/>
                This property applies to the parent and defines how<br/>
                it's children will lay out along it's primary<br/>
                axis (horizontal if row, vertical if column).<br/>
                We'll take a tour of the available values.
            </div>
            <div class="parent" style="display:flex;flex-direction:row;justify-content:flex-start;min-width:600px">
                <div class="child">
                    Item 1
                </div>
                <div class="child">
                    Item 2
                </div>
                <div class="child">
                    Item 3
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection