@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">"Masonry" for constant height items</div>
@endsection

@section("content")
    <code>
        display:flex;<br/>
        flex-direction:row;<br/>
        flex-wrap:wrap;<br/>
    </code>
    On Parent
    <div class="parent" style="display:flex;flex-direction:row;flex-wrap:wrap;">
        @foreach(range(1,20) as $index => $value)
            <div class="child" style="height:150px;width:{{rand(100,350)}}px">
                Item {{ $index }}
            </div>
        @endforeach
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection