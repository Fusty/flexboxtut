@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
    <style>
        .parent {
            color:yellow;
        }
        .top-left {
            display:flex;
            flex-direction:row;
            justify-content:flex-start;
            align-items:flex-start;
        }
        .center-left {
            display:flex;
            flex-direction:row;
            justify-content:flex-start;
            align-items:center;
        }
        .bottom-left {
            display:flex;
            flex-direction:row;
            justify-content:flex-start;
            align-items:flex-end;
        }
        .center-top {
            display:flex;
            flex-direction:row;
            justify-content:center;
            align-items:flex-start;
        }
        .center-center {
            display:flex;
            flex-direction:row;
            justify-content:center;
            align-items:center;
        }
        .center-bottom {
            display:flex;
            flex-direction:row;
            justify-content:center;
            align-items:flex-end;
        }
        .right-top {
            display:flex;
            flex-direction:row;
            justify-content:flex-end;
            align-items:flex-start;
        }
        .right-center {
            display:flex;
            flex-direction:row;
            justify-content:flex-end;
            align-items:center;
        }
        .right-bottom {
            display:flex;
            flex-direction:row;
            justify-content:flex-end;
            align-items:flex-end;
        }
    </style>
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">Positioning Workout</div>
@endsection

@section("content")
    <div style="display:flex;flex-direction:row;align-items:stretch;">
        <pre class="prettyprint" style="flex-basis:50%;margin-bottom:0;">
    Top Left

    .top-left {
        display:flex;
        flex-direction:row;
        justify-content:flex-start;/*Main Axis*/
        align-items:flex-start;/*Cross Axis*/
    }
        </pre>
        <div class="top-left parent" style="flex-basis:50%;">
            I should be in the top left
        </div>
    </div>
    <div style="display:flex;flex-direction:row;align-items:stretch;">
        <pre class="prettyprint" style="flex-basis:50%;margin-bottom:0;">
    Center left

    .center-left {
        display:flex;
        flex-direction:row;
        justify-content:flex-start;/*Main Axis*/
        align-items:center;/*Cross Axis*/
    }
        </pre>
        <div class="center-left parent" style="flex-basis:50%;">
            I should be in the center left
        </div>
    </div>
    <div style="display:flex;flex-direction:row;align-items:stretch;">
        <pre class="prettyprint" style="flex-basis:50%;margin-bottom:0;">
    Bottom left

    .bottom-left {
        display:flex;
        flex-direction:row;
        justify-content:flex-start;/*Main Axis*/
        align-items:center;/*Cross Axis*/
    }
        </pre>
        <div class="bottom-left parent" style="flex-basis:50%;">
            I should be in the bottom left
        </div>
    </div>
    <div style="display:flex;flex-direction:row;align-items:stretch;">
        <pre class="prettyprint" style="flex-basis:50%;margin-bottom:0;">
    Center Top

    .center-top {
        display:flex;
        flex-direction:row;
        justify-content:center;/*Main Axis*/
        align-items:flex-start;/*Cross Axis*/
    }
        </pre>
        <div class="center-top parent" style="flex-basis:50%;">
            I should be in the center top
        </div>
    </div>
    <div style="display:flex;flex-direction:row;align-items:stretch;">
        <pre class="prettyprint" style="flex-basis:50%;margin-bottom:0;">
    Center Center

    .center-center {
        display:flex;
        flex-direction:row;
        justify-content:center;/*Main Axis*/
        align-items:center;/*Cross Axis*/
    }
        </pre>
        <div class="center-center parent" style="flex-basis:50%;">
            I should be in the center center
        </div>
    </div>
    <div style="display:flex;flex-direction:row;align-items:stretch;">
        <pre class="prettyprint" style="flex-basis:50%;margin-bottom:0;">
    Center Bottom

    .center-bottom {
        display:flex;
        flex-direction:row;
        justify-content:center;/*Main Axis*/
        align-items:flex-end;/*Cross Axis*/
    }
        </pre>
        <div class="center-bottom parent" style="flex-basis:50%;">
            I should be in the center bottom
        </div>
    </div>
    <div style="display:flex;flex-direction:row;align-items:stretch;">
        <pre class="prettyprint" style="flex-basis:50%;margin-bottom:0;">
    Right Top

    .right-top {
        display:flex;
        flex-direction:row;
        justify-content:flex-end;/*Main Axis*/
        align-items:flex-start;/*Cross Axis*/
    }
        </pre>
        <div class="right-top parent" style="flex-basis:50%;">
            I should be in the right top
        </div>
    </div>
    <div style="display:flex;flex-direction:row;align-items:stretch;">
        <pre class="prettyprint" style="flex-basis:50%;margin-bottom:0;">
    Right Center

    .right-center {
        display:flex;
        flex-direction:row;
        justify-content:flex-end;/*Main Axis*/
        align-items:center;/*Cross Axis*/
    }
        </pre>
        <div class="right-center parent" style="flex-basis:50%;">
            I should be in the right center
        </div>
    </div>
    <div style="display:flex;flex-direction:row;align-items:stretch;">
        <pre class="prettyprint" style="flex-basis:50%;margin-bottom:0;">
    Right Bottom

    .right-top {
        display:flex;
        flex-direction:row;
        justify-content:flex-end;/*Main Axis*/
        align-items:flex-end;/*Cross Axis*/
    }
        </pre>
        <div class="right-bottom parent" style="flex-basis:50%;">
            I should be in the right bottom
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection