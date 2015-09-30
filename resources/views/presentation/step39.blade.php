@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
    <style>

        .flex-row {
            display:flex;
            flex-direction:row;
            flex-wrap:wrap;

            font-size:smaller;
        }

        .flex-row>* {
            flex-grow:0;
            flex-shrink:0;
            flex-basis:8.3333%;

            padding:10px;

            text-align:center;
            background-clip:content-box;
        }

        .flex-grow {
            flex-grow:1;
        }

        .flex-shrink {
            flex-shrink:1;
        }

        @foreach(range(1,12) as $col)

        .flex-col-{{ $col }} {
            flex-basis: {{(100/(12/$col))}}%
        }
        @endforeach

        @foreach(range(1,11) as $col)

        .flex-offset-{{ $col }} {
            margin-left: {{(100/(12/$col))}}%
        }
        @endforeach

        .parent, .child, .child2, .child3 {
            border: 0px none white;
        }

    </style>
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">Bootstrap Grid Recreation</div>
    <div class="header-item header-brand" style="font-size:smaller;font-weight:normal;">Dirt Simple</div>
@endsection

@section("content")
    <div class="flex-row parent">
        @foreach(range(1,12) as $range)
        <div class="flex-col-1 child">
            .flex-col-1
        </div>
        @endforeach
    </div>
    <div class="flex-row parent">
        <div class="flex-col-6 child">
            .flex-col-6
        </div>
        <div class="flex-col-6 child">
            .flex-col-6
        </div>
    </div>
    <div class="flex-row parent">
        <div class="flex-col-3 child">
            .flex-col-3
        </div>
        <div class="flex-col-6 child">
            .flex-col-6
        </div>
        <div class="flex-col-3 child">
            .flex-col-3
        </div>
    </div>
    <div class="flex-row parent">
        <div class="flex-col-1 child">
            .flex-col-1
        </div>
        <div class="flex-col-1 child">
            .flex-col-1
        </div>
        <div class="flex-col-8 child">
            .flex-col-8
        </div>
        <div class="flex-col-1 child">
            .flex-col-1
        </div>
        <div class="flex-col-1 child">
            .flex-col-1
        </div>
    </div>
    <div class="flex-row parent">
        <div class="flex-col-6 flex-offset-3 child">
            .flex-col-6 .flex-offset-3
        </div>
    </div>
    <div class="flex-row parent">
        <div class="flex-col-6 flex-offset-1 child">
            .flex-col-6 .flex-offset-1
        </div>
    </div>
    <div class="flex-row parent">
        <div class="flex-col-1 child">
            .flex-col-1
        </div>
        <div class="flex-col-1 child">
            .flex-col-1
        </div>
        <div class="flex-col-6 child flex-row">
            <div class="flex-col-12 child2">
                Nested Grid<br/>
                .flex-col-12
            </div>
            <div class="flex-col-4 child2">
                .flex-col-4
            </div>
            <div class="flex-col-4  child2">
                .flex-col-4
            </div>
            <div class="flex-col-4  child2">
                .flex-col-4
            </div>
        </div>
    </div>
    <div class="flex-row">
        <div class="flex-col-6" style="text-align:left;">
            <pre class="prettyprint">
Vanilla CSS

.flex-row {
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
}
.flex-row>* {
    flex-grow:0;
    flex-shrink:0;
    flex-basis:8.3333%;
    padding:10px;
}
.flex-grow {
    flex-grow:1;
}
.flex-shrink {
    flex-shrink:1;
}
.flex-col-1 {
    flex-basis: 8.3333%;
}
.flex-col-2 {
    flex-basis: 16.6666%;
}
.flex-col-3 {
    flex-basis: 25%;
}
.flex-col-4 {
    flex-basis: 33.3333%;
}
.flex-col-5 {
    flex-basis: 41.6666%;
}
.flex-col-6 {
    flex-basis: 50%;
}
.flex-col-7 {
    flex-basis: 58.3333%;
}
.flex-col-8 {
    flex-basis: 66.6666%;
}
.flex-col-9 {
    flex-basis: 75%;
}
.flex-col-10 {
    flex-basis: 83.3333%;
}
.flex-col-11 {
    flex-basis: 91.6666%;
}
.flex-col-12 {
    flex-basis: 100%;
}
.flex-offset-1 {
    margin-left: 8.3333%;
}
.flex-offset-2 {
    margin-left: 16.6666%;
}
.flex-offset-3 {
    margin-left: 25%;
}
.flex-offset-4 {
    margin-left: 33.3333%;
}
.flex-offset-5 {
    margin-left: 41.6666%;
}
.flex-offset-6 {
    margin-left: 50%;
}
.flex-offset-7 {
    margin-left: 58.3333%;
}
.flex-offset-8 {
    margin-left: 66.6666%;
}
.flex-offset-9 {
    margin-left: 75%;
}
.flex-offset-10 {
    margin-left: 83.3333%;
}
.flex-offset-11 {
    margin-left: 91.6666%;
}

            </pre>
        </div>
        <div class="flex-col-6" style="text-align:left;">
            <pre class="prettyprint">
Blade CSS

.flex-row {
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
}
.flex-row>* {
    flex-grow:0;
    flex-shrink:0;
    flex-basis:8.3333%;
    padding:10px;
}
.flex-grow {
    flex-grow:1;
}
.flex-shrink {
    flex-shrink:1;
}
&commat;foreach(range(1,12) as $col)

.flex-col-&lbrace;&lbrace; $col &rbrace;&rbrace; {
    flex-basis: &lbrace;&lbrace;(100/(12/$col))&rbrace;&rbrace;%
}
&commat;endforeach

&commat;foreach(range(1,11) as $col)

.flex-offset-&lbrace;&lbrace; $col &rbrace;&rbrace; {
    margin-left: &lbrace;&lbrace;(100/(12/$col))&rbrace;&rbrace;%
}
&commat;endforeach
            </pre>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection