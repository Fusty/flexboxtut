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
    <h2>Aligning Individual Items (align-self)</h2>
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:stretch;">
        <div style="display:flex;flex-direction:row;justify-content:space-around;">
            <div>
                Override align-items on a per-item basis<br/>
                <code>
                    display:flex;<br/>
                    flex-direction:row;<br/>
                    flex-wrap:wrap;<br/>
                    justify-content:space-around;<br/>
                    align-items:center;<br/>
                </code>
                on the parent<br/>
                <code>
                    align-self:center;<br/>
                </code>
                on the first item<br/>
                <code>
                    align-self:flex-start;<br/>
                </code>
                on the second item<br/>
                <code>
                    align-self:flex-end;<br/>
                </code>
                on the third item<br/>


            </div>
            <div class="parent" style="display:flex;flex-direction:row;flex-wrap:wrap;justify-content:space-around;align-items:center;min-width:600px">
                <div class="child" style="align-self:center">
                    Item 1
                </div>
                <div class="child" style="align-self:flex-start">
                    Item 2
                </div>
                <div class="child" style="align-self:flex-end">
                    Item 3
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection