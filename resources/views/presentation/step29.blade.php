@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">Ordering Items (order)</div>
@endsection

@section("content")
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:stretch;">
        <div class="row">
            <div class="col-xs-6">
                You can order items with CSS now! (So many possibilities!)<br/>
                <code>
                    display:flex;<br/>
                    flex-direction:row;<br/>
                    flex-wrap:wrap;<br/>
                    justify-content:flex-start;<br/>
                </code>
                on the parent<br/>
                <code>
                    order: &lt;someInteger&gt;;<br/>
                </code>
                on the children<br/>
            </div>
            <div class="parent col-xs-6" style="display:flex;flex-direction:row;flex-wrap:wrap;justify-content:flex-start;min-height:400px;padding:0px;">
                <div class="child" style="order:1;">
                    html position 1<br/>
                    order 1
                </div>
                <div class="child" style="order:5;">
                    html position 2<br/>
                    order 5
                </div>
                <div class="child" style="order:3;">
                    html position 3<br/>
                    order 3
                </div>
                <div class="child" style="order:4;">
                    html position 4<br/>
                    order 4
                </div>
                <div class="child" style="order:2;">
                    html position 5<br/>
                    order 2
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection