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
                Stretching those items (what was occurring earlier due to inheritance)<br/>
                <code>
                    display:flex;<br/>
                    flex-direction:row;<br/>
                    flex-wrap:wrap;<br/>
                    justify-content:space-around;<br/>
                    align-items:stretch;<br/>
                </code>
                on the parent<br/>
                <h3>What's going on here?</h3>
                <code>align-items:stretch;</code> is a useful one<br/>
                Stretch makes the child element flex to fill it's cross axis<br/>
                This one is sweet for headers and footers or anything where<br/>
                you want elements to match their largest neighbor in a row/column

            </div>
            <div class="parent" style="display:flex;flex-direction:row;flex-wrap:wrap;justify-content:space-around;align-items:stretch;min-width:600px">
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