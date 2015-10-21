@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">Full on Masonry</div>
@endsection

@section("content")
    <code>
        display:flex;<br/>
        flex-direction:row;<br/>
        flex-wrap:wrap;<br/>
    </code>
    On Parent and<br/>
    <code>flex-grow:1;</code>
    on the children
    <div class="parent" style="display:flex;flex-direction:row;flex-wrap:wrap;">
        @foreach(range(1,20) as $index => $value)
            <div class="child" style="display:flex;flex-direction:column;align-items:center;flex-grow:1;width:{{rand(100,350)}}px;padding:5px;overflow:hidden;">
                <h2 style="font-size:12pt;font-weight:600;flex:0 0 auto;">{{ $faker->catchphrase }}<small style="margin-left:2px;"><br/>{{$faker->company}}</small></h2>
                <img src="http://lorempixel.com/200/150/cats?d={{rand(0,9999)}}" style="flex:1 0 auto; height: auto;"/>
                <p style="flex:1 0 auto;font-size:8pt;">{{ $faker->paragraph() }}</p>
            </div>
        @endforeach
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection