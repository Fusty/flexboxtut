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
    <h2>Aligning Items (align-items)</h2>
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

            </div>
            <div class="parent" style="display:flex;flex-direction:row;flex-wrap:wrap;justify-content:space-around;align-items:baseline;min-width:600px">
                <div class="child">
                    Item 1
                </div>
                <div class="child" style="padding-top:40px;">
                    Item 2<br/>
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