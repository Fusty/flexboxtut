@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
    <style>
        .allColors {
            display: flex;
            flex-direction: row;
            overflow:hidden;
        }

        .color {
            flex-grow: 1;
            flex-shrink: 1;
            flex-basis: 10%;

            height: 350px;
            padding: 10px;
            overflow:hidden;
            white-space:nowrap;
            box-shadow: 0 0 30px #404040;

            transition: all 0.5s;
        }

        .color>h4 {
            color: #494949;
            font-weight: 800;
        }

        .color:hover {
            flex-grow: 3;
        }

        .showText {
            color: #494949;
            opacity:0;
            transition: all 0.5s;
        }

        .color:hover .showText {
            opacity: 1;
        }
    </style>
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">Focus Section Expansion</div>
@endsection


@section("content")
    <div class="allColors">
        <div class="color" style="background-color:rgb(140, 184, 99);">
            <h4>Afternoon Delight</h4>
            <p class="showText">
                A tasteful expression of your<br/>
                after-lunch desires<br/><br/>
                Red: 140<br/>
                Green: 184<br/>
                Blue: 99<br/>
            </p>
        </div>
        <div class="color" style="background-color:rgb(225, 226, 201);">
            <h4>Bone</h4>
            <p class="showText">
                And the lettering is something<br/>
                called Silian Rail<br/><br/>
                Red: 225<br/>
                Green: 226<br/>
                Blue: 201<br/>
            </p>
        </div>
        <div class="color" style="background-color:rgb(161, 143, 234);">
            <h4>Barbaralily</h4>
            <p class="showText">
                Graceful, tender, timeless . . .<br/>
                like great-aunt Bernadette<br/><br/>
                Red: 161<br/>
                Green: 143<br/>
                Blue: 234<br/>
            </p>
        </div>
        <div class="color" style="background-color:rgb(98, 191, 199);">
            <h4>African Sour Pod</h4>
            <p class="showText">
                This color sucks and you know it<br/><br/>
                Red: 98<br/>
                Green: 191<br/>
                Blue: 199<br/>
            </p>
        </div>
        <div class="color" style="background-color:rgb(178, 134, 110);">
            <h4>Butte Hoel</h4>
            <p class="showText">
                A gentle starfish upon a<br/>
                sea of cream<br/><br/>
                Red: 178<br/>
                Green: 134<br/>
                Blue: 110<br/>
            </p>
        </div>
    </div>
    <div style="margin-top:1em;display:flex;flex-direction:row;">
        <pre class="prettyprint" style="flex-grow:1;">
.allColors {
    display: flex;
    flex-direction: row;
    overflow:hidden;
}
.color {
    flex-grow: 1;
    flex-basis: 10%;
    height: 350px;
    padding: 10px;
    overflow:hidden;
    white-space:nowrap;
    box-shadow: 0 0 30px #404040;
    transition: all 0.5s;
}
.color:hover {
    flex-grow: 3;
}
.showText {
    opacity:0;
    transition: all 0.5s;
}
.color:hover .showText {
    opacity: 1;
}

        </pre>
        <pre class="prettyprint" style="flex-grow:1;">
&#x3C;div class=&#x22;allColors&#x22;&#x3E;
    &#x3C;div class=&#x22;color&#x22; style=&#x22;...&#x22;&#x3E;
        &#x3C;h4&#x3E;Afternoon Delight&#x3C;/h4&#x3E;
        &#x3C;p class=&#x22;showText&#x22;&#x3E;
            A tasteful expression of your&#x3C;br/&#x3E;
            after-lunch desires&#x3C;br/&#x3E;&#x3C;br/&#x3E;
            Red: 140&#x3C;br/&#x3E;
            Green: 184&#x3C;br/&#x3E;
            Blue: 99&#x3C;br/&#x3E;
        &#x3C;/p&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;color&#x22; style=&#x22;...&#x22;&#x3E;
        &#x3C;h4&#x3E;Bone&#x3C;/h4&#x3E;
        &#x3C;p class=&#x22;showText&#x22;&#x3E;
            And the lettering is something&#x3C;br/&#x3E;
            called Silian Rail&#x3C;br/&#x3E;&#x3C;br/&#x3E;
            Red: 225&#x3C;br/&#x3E;
            Green: 226&#x3C;br/&#x3E;
            Blue: 201&#x3C;br/&#x3E;
        &#x3C;/p&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;color&#x22; style=&#x22;...&#x22;&#x3E;
        &#x3C;h4&#x3E;Barbaralily&#x3C;/h4&#x3E;
        &#x3C;p class=&#x22;showText&#x22;&#x3E;
            Graceful, tender, timeless . . .&#x3C;br/&#x3E;
            like great-aunt Bernadette&#x3C;br/&#x3E;&#x3C;br/&#x3E;
            Red: 161&#x3C;br/&#x3E;
            Green: 143&#x3C;br/&#x3E;
            Blue: 234&#x3C;br/&#x3E;
        &#x3C;/p&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;color&#x22; style=&#x22;...&#x22;&#x3E;
        &#x3C;h4&#x3E;African Sour Pod&#x3C;/h4&#x3E;
        &#x3C;p class=&#x22;showText&#x22;&#x3E;
            This color sucks and you know it&#x3C;br/&#x3E;&#x3C;br/&#x3E;
            Red: 98&#x3C;br/&#x3E;
            Green: 191&#x3C;br/&#x3E;
            Blue: 199&#x3C;br/&#x3E;
        &#x3C;/p&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;color&#x22; style=&#x22;...&#x22;&#x3E;
        &#x3C;h4&#x3E;Butte Hoel&#x3C;/h4&#x3E;
        &#x3C;p class=&#x22;showText&#x22;&#x3E;
            A gentle starfish upon a&#x3C;br/&#x3E;
            sea of cream&#x3C;br/&#x3E;&#x3C;br/&#x3E;
            Red: 178&#x3C;br/&#x3E;
            Green: 134&#x3C;br/&#x3E;
            Blue: 110&#x3C;br/&#x3E;
        &#x3C;/p&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;

        </pre>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=desert"></script>
@endsection