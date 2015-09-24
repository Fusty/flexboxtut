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
        <h2>What is Flexbox anyway?</h2>
        <p>
            Flexbox is a powerful flexible box layout CSS module that is here to save the world.<br/>
        <ul>
            <li>Flexbox is direction agnostic! (vertical alignment is as easy as horizontal)</li><br/>
            <li>Flexbox lets you define how content should stretch or not stretch to fill its container</li><br/>
            <li>Flexbox is surprisingly predictable given all of its flexibility</li><br/>
            <li>Flexbox is useful for "normal" pages as well as rich webapps</li><br/>
        </ul>
        </p>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection