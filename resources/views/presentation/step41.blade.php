@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
<style>
    .slant-row {
        display:flex;
        flex-direction:row;
        justify-content:flex-start;
    }
</style>
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">Nothing Yet</div>
@endsection

@section("content")
    <div class="slant-row">
        @foreach(range(0,50) as $index=>$value)
            <div class="slant-item">
                Item {{ $index }}
            </div>
        @endforeach
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection