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
    <h2>"Masonry" for constant width items </h2>
    <code>
        display:flex;<br/>
        flex-direction:column;<br/>
        flex-wrap:wrap;<br/>
    </code>
    On Parent
    <div class="parent" style="display:flex;flex-direction:column;flex-wrap:wrap;height:600px;">
        @foreach(range(1,15) as $index => $value)
            <div class="child" style="height:{{rand(50,250)}}px">
                Item {{ $index }}
            </div>
        @endforeach
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection