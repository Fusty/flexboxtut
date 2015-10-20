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
    <div style="display:flex;flex-direction:row;justify-content:center;">
        <div style="max-width:900px;">
            <h3>Ok, WTF is <code>flex-basis</code>?</h3>
            First off the flexbox model bases all of it's flexing on the<br/>
            child elements "main size".  When <code>flex-basis:auto;</code> is the case<br/>
            this is just the size along the main axis according to the element's box-sizing.<br/>
            Border-box is the most useful for flexbox.<br/><br/>
            What flex-basis does is manually set this size (length or percentage).<br/>
            That means you can use flex-basis to enforce a constant<br/>
            width/height on child elements so any flexing that occurs<br/>
            will be equal among all child elements.  You can also use it<br/>
            to mix items that will <code>flex-grow:1;</code> with items that won't<br/>
            and keep things predictable.
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection