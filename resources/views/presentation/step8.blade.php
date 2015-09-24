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
                Header, body/content, footer pattern<br/>
                (What I built all of these pages with)<br/>
                <code>
                    display:flex;<br/>
                    flex-direction:column;<br/>
                </code>
                on the parent<br/>
                <code>
                    flex-grow:0;<br/>
                    flex-shrink:0;<br/>
                </code>
                on the header and footer<br/>
                <code>
                    flex-grow:1;<br/>
                    flex-shrink:0;<br/>
                </code>
                on the body/content<br/><br/>
                Grow 0 forbids stretching the div<br/>
                beyond its contents/explicit height<br/>
                Shrink 0 forbids shrinking the div smaller<br/>
                than its contents/explicit height

            </div>
            <div class="parent" style="display:flex;flex-direction:column;min-height:300px">
                <div class="child" style="flex-grow:0;flex-shrink:0;">
                    Header
                </div>
                <div class="child" style="flex-grow:1;flex-shrink:0;">
                    Body/Content
                </div>
                <div class="child" style="flex-grow:0;flex-shrink:0">
                    Footer
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection