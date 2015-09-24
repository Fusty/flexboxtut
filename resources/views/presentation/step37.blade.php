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
    <h2>Focus Section Expansion</h2>
    <div class="parent" style="display:flex;flex-direction:row;">
        @foreach(range(1,5) as $index => $value)
            <div class="child expandable" style="flex-grow:1;flex-shrink:0;height:350px;">
                Click me!<br/>
                flex-grow:1;
            </div>
        @endforeach
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <script>
        var FlexDemo = {};
        $(document).ready(function(){
            $('.expandable').click(function(){
                if($(this).css('flex-grow') != '1'){
                    $(this).css('flex-grow','1');
                    $(this).html('Click me!<br/>flex-grow:1;');
                    delete FlexDemo.currentlySelected;
                }else{
                    console.log(FlexDemo.currentlySelected);
                    if(typeof FlexDemo.currentlySelected != 'undefined'){
                        $(FlexDemo.currentlySelected).css('flex-grow','1');
                        $(FlexDemo.currentlySelected).html('Click me!<br/>flex-grow:1;');
                    }
                    $(this).css('flex-grow', '10');
                    $(this).html('Click me!<br/>flex-grow:10;');
                    FlexDemo.currentlySelected = this;

                }
            });
        });
    </script>
@endsection