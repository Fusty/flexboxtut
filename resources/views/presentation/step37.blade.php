@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
    <style>
        img {
            max-width:100% !important;
            height:auto;
            display:block;
        }
    </style>
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
            <?php $thisRand = rand(150,350);?>
            <div class="child" style="display:flex;flex-direction:column;align-items:center;flex-grow:1;width:{{$thisRand}}px;padding:5px;overflow:hidden;">
                <h2 style="font-size:12pt;font-weight:600;flex:0 0 auto;">{{ $faker->catchphrase }}<small style="max-width:350px;flex:1 0 auto;margin-left:2px;"><br/>{{$faker->company}}</small></h2>
                <img src="http://lorempixel.com/{{$thisRand}}/150/cats?d={{rand(0,9999)}}" style="flex:0 0 auto;max-width:350px;"/>
                <p style="flex:1 0 auto;font-size:8pt;max-width:350px;">{{ $faker->paragraph() }}</p>
            </div>
        @endforeach
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection