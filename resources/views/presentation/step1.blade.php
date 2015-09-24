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
    <div>
        <h1>Welcome to Flexbox!&nbsp;&nbsp;&nbsp;<small>Don't worry, it's not too bad.</small></h1>
        <p style="color:rgb(200, 200, 200);">
            Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;Be afraid . . . be verrrrry afraid.&nbsp;&nbsp;
        </p>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection