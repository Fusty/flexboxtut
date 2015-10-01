@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
    <style>
        .keyboard {
            display:flex;
            flex-direction:column;
        }

        .keyboard-row {
            display:flex;
            flex-direction:row;
        }

        .keyboard-key {
            flex-grow:1;
            flex-basis:0px;
            margin:5px;
            padding-left:10px;
            background-color: #c2c2c2;
        }

        .keyboard-key.isPressed {
            background-color: #c29d97;
            transition: background-color 0.1s;
        }
    </style>
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">Goofball Layouts</div>
    <div class="header-item" style="font-weight:normal;">Almost have a typing game going here . . .</div>
@endsection

@section("content")
    <div class="keyboard">
        <div class="keyboard-row">
            <div class="keyboard-key keyboard-key-Backtick">`</div>
            <div class="keyboard-key keyboard-key-1">1</div>
            <div class="keyboard-key keyboard-key-2">2</div>
            <div class="keyboard-key keyboard-key-3">3</div>
            <div class="keyboard-key keyboard-key-4">4</div>
            <div class="keyboard-key keyboard-key-5">5</div>
            <div class="keyboard-key keyboard-key-6">6</div>
            <div class="keyboard-key keyboard-key-7">7</div>
            <div class="keyboard-key keyboard-key-8">8</div>
            <div class="keyboard-key keyboard-key-9">9</div>
            <div class="keyboard-key keyboard-key-0">0</div>
            <div class="keyboard-key keyboard-key--">-</div>
            <div class="keyboard-key keyboard-key-Equals">=</div>
            <div class="keyboard-key keyboard-key-Backspace" style="flex-grow:2.5;">Backspace</div>
        </div>
        <div class="keyboard-row">
            <div class="keyboard-key keyboard-key-Tab" style="flex-grow:1.5;">Tab</div>
            <div class="keyboard-key keyboard-key-Q">Q</div>
            <div class="keyboard-key keyboard-key-W">W</div>
            <div class="keyboard-key keyboard-key-E">E</div>
            <div class="keyboard-key keyboard-key-R">R</div>
            <div class="keyboard-key keyboard-key-T">T</div>
            <div class="keyboard-key keyboard-key-Y">Y</div>
            <div class="keyboard-key keyboard-key-U">U</div>
            <div class="keyboard-key keyboard-key-I">I</div>
            <div class="keyboard-key keyboard-key-O">O</div>
            <div class="keyboard-key keyboard-key-P">P</div>
            <div class="keyboard-key keyboard-key-LBracket">[</div>
            <div class="keyboard-key keyboard-key-RBracket">]</div>
            <div class="keyboard-key keyboard-key-Backslash" style="flex-grow:1.5;">\</div>
        </div>
        <div class="keyboard-row">
            <div class="keyboard-key keyboard-key-Lock" style="flex-grow:1.8;">Caps Lock</div>
            <div class="keyboard-key keyboard-key-A">A</div>
            <div class="keyboard-key keyboard-key-S">S</div>
            <div class="keyboard-key keyboard-key-D">D</div>
            <div class="keyboard-key keyboard-key-F">F</div>
            <div class="keyboard-key keyboard-key-G">G</div>
            <div class="keyboard-key keyboard-key-H">H</div>
            <div class="keyboard-key keyboard-key-J">J</div>
            <div class="keyboard-key keyboard-key-K">K</div>
            <div class="keyboard-key keyboard-key-L">L</div>
            <div class="keyboard-key keyboard-key-SColon">;</div>
            <div class="keyboard-key keyboard-key-SQuote">'</div>
            <div class="keyboard-key keyboard-key-Enter" style="flex-grow:3;">Enter</div>
        </div>
        <div class="keyboard-row">
            <div class="keyboard-key keyboard-key-Shift" style="flex-grow:2;">Shift</div>
            <div class="keyboard-key keyboard-key-Z">Z</div>
            <div class="keyboard-key keyboard-key-X">X</div>
            <div class="keyboard-key keyboard-key-C">C</div>
            <div class="keyboard-key keyboard-key-V">V</div>
            <div class="keyboard-key keyboard-key-B">B</div>
            <div class="keyboard-key keyboard-key-N">N</div>
            <div class="keyboard-key keyboard-key-M">M</div>
            <div class="keyboard-key keyboard-key-Comma">,</div>
            <div class="keyboard-key keyboard-key-Period">.</div>
            <div class="keyboard-key keyboard-key-FSlash">/</div>
            <div class="keyboard-key keyboard-key-Shift" style="flex-grow:3.2;">Shift</div>
        </div>
        <div class="keyboard-row">
            <div class="keyboard-key keyboard-key-Ctrl">Ctrl</div>
            <div class="keyboard-key keyboard-key-LWin">Win</div>
            <div class="keyboard-key keyboard-key-Alt">Alt</div>
            <div class="keyboard-key keyboard-key-Space" style="flex-grow:12;"></div>
            <div class="keyboard-key keyboard-key-Alt">Alt</div>
            <div class="keyboard-key keyboard-key-RWin">Win</div>
            <div class="keyboard-key keyboard-key-File">File</div>
            <div class="keyboard-key keyboard-key-Ctrl">Ctrl</div>
        </div>
    </div>
    <div style="display:flex;flex-direction:row;align-items:stretch;margin-top:1em;">
        <pre class="prettyprint" style="flex-grow:1;">
.keyboard {
    display:flex;
    flex-direction:column;
}
.keyboard-row {
    display:flex;
    flex-direction:row;
}
.keyboard-key {
    flex-grow:1;
    flex-basis:0px;
    margin:5px;
    padding-left:10px;
    background-color: #c2c2c2;
}
.keyboard-key.isPressed {
    background-color: #c29d97;
}
        </pre>
        <pre class="prettyprint" style="flex-grow:1;font-size:15px;">
&#x3C;div class=&#x22;keyboard&#x22;&#x3E;
    &#x3C;div class=&#x22;keyboard-row&#x22;&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Backtick&#x22;&#x3E;&#x60;&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-1&#x22;&#x3E;1&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-2&#x22;&#x3E;2&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-3&#x22;&#x3E;3&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-4&#x22;&#x3E;4&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-5&#x22;&#x3E;5&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-6&#x22;&#x3E;6&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-7&#x22;&#x3E;7&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-8&#x22;&#x3E;8&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-9&#x22;&#x3E;9&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-0&#x22;&#x3E;0&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key--&#x22;&#x3E;-&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Equals&#x22;&#x3E;=&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Backspace&#x22; style=&#x22;flex-grow:2.5;&#x22;&#x3E;Backspace&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;keyboard-row&#x22;&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Tab&#x22; style=&#x22;flex-grow:1.5;&#x22;&#x3E;Tab&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Q&#x22;&#x3E;Q&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-W&#x22;&#x3E;W&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-E&#x22;&#x3E;E&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-R&#x22;&#x3E;R&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-T&#x22;&#x3E;T&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Y&#x22;&#x3E;Y&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-U&#x22;&#x3E;U&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-I&#x22;&#x3E;I&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-O&#x22;&#x3E;O&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-P&#x22;&#x3E;P&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-LBracket&#x22;&#x3E;[&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-RBracket&#x22;&#x3E;]&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Backslash&#x22; style=&#x22;flex-grow:1.5;&#x22;&#x3E;\&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;keyboard-row&#x22;&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Lock&#x22; style=&#x22;flex-grow:1.8;&#x22;&#x3E;Caps Lock&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-A&#x22;&#x3E;A&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-S&#x22;&#x3E;S&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-D&#x22;&#x3E;D&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-F&#x22;&#x3E;F&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-G&#x22;&#x3E;G&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-H&#x22;&#x3E;H&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-J&#x22;&#x3E;J&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-K&#x22;&#x3E;K&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-L&#x22;&#x3E;L&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-SColon&#x22;&#x3E;;&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-SQuote&#x22;&#x3E;&#x27;&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Enter&#x22; style=&#x22;flex-grow:3;&#x22;&#x3E;Enter&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;keyboard-row&#x22;&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Shift&#x22; style=&#x22;flex-grow:2;&#x22;&#x3E;Shift&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Z&#x22;&#x3E;Z&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-X&#x22;&#x3E;X&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-C&#x22;&#x3E;C&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-V&#x22;&#x3E;V&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-B&#x22;&#x3E;B&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-N&#x22;&#x3E;N&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-M&#x22;&#x3E;M&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Comma&#x22;&#x3E;,&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Period&#x22;&#x3E;.&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-FSlash&#x22;&#x3E;/&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Shift&#x22; style=&#x22;flex-grow:3.2;&#x22;&#x3E;Shift&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;keyboard-row&#x22;&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Ctrl&#x22;&#x3E;Ctrl&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-LWin&#x22;&#x3E;Win&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Alt&#x22;&#x3E;Alt&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Space&#x22; style=&#x22;flex-grow:12;&#x22;&#x3E;&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Alt&#x22;&#x3E;Alt&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-RWin&#x22;&#x3E;Win&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-File&#x22;&#x3E;File&#x3C;/div&#x3E;
        &#x3C;div class=&#x22;keyboard-key keyboard-key-Ctrl&#x22;&#x3E;Ctrl&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;

        </pre>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <script>
        $(document).ready(function(){
            $("body").on("keydown", function(event){
                var char = String.fromCharCode(event.keyCode);
                console.log(event.keyCode + ":" + char);

                var wasCaught = false;
                //Handle Special Keys
                switch(event.keyCode) {
                    case 192:
                        $('.keyboard-key-Backtick').addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 9:
                        $(".keyboard-key-Tab").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 20:
                        $(".keyboard-key-Lock").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 16:
                        $(".keyboard-key-Shift").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 17:
                        $(".keyboard-key-Ctrl").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 91:
                        $(".keyboard-key-LWin").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 92:
                        $(".keyboard-key-RWin").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 93:
                        $(".keyboard-key-File").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 18:
                        $(".keyboard-key-Alt").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 32:
                        $(".keyboard-key-Space").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 13:
                        $(".keyboard-key-Enter").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 220:
                        $(".keyboard-key-Backslash").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 189:
                        $(".keyboard-key--").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 187:
                        $(".keyboard-key-Equals").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 8:
                        $(".keyboard-key-Backspace").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 219:
                        $(".keyboard-key-LBracket").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 221:
                        $(".keyboard-key-RBracket").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 222:
                        $(".keyboard-key-SQuote").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 186:
                        $(".keyboard-key-SColon").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 191:
                        $(".keyboard-key-FSlash").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 190:
                        $(".keyboard-key-Period").addClass("isPressed");
                        wasCaught = true;
                        return;
                    case 188:
                        $(".keyboard-key-Comma").addClass("isPressed");
                        wasCaught = true;
                        return;
                }

                if(!wasCaught){
                    if($(".keyboard-key-"+char).length > 0){
                        $(".keyboard-key-"+char).addClass("isPressed");
                        event.preventDefault();
                    }
                }else{
                    event.preventDefault();
                }
            });
            $("body").on("keyup", function(event){
                var wasCaught = false;
                var char = String.fromCharCode(event.keyCode);

                //Handle Special Keys
                switch(event.keyCode) {
                    case 192:
                        $('.keyboard-key-Backtick').removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 9:
                        $(".keyboard-key-Tab").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 20:
                        $(".keyboard-key-Lock").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 16:
                        $(".keyboard-key-Shift").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 17:
                        $(".keyboard-key-Ctrl").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 91:
                        $(".keyboard-key-LWin").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 92:
                        $(".keyboard-key-RWin").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 93:
                        $(".keyboard-key-File").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 18:
                        $(".keyboard-key-Alt").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 32:
                        $(".keyboard-key-Space").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 13:
                        $(".keyboard-key-Enter").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 220:
                        $(".keyboard-key-Backslash").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 189:
                        $(".keyboard-key--").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 187:
                        $(".keyboard-key-Equals").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 8:
                        $(".keyboard-key-Backspace").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 219:
                        $(".keyboard-key-LBracket").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 221:
                        $(".keyboard-key-RBracket").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 222:
                        $(".keyboard-key-SQuote").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 186:
                        $(".keyboard-key-SColon").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 191:
                        $(".keyboard-key-FSlash").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 190:
                        $(".keyboard-key-Period").removeClass("isPressed");
                        wasCaught = true;
                        return;
                    case 188:
                        $(".keyboard-key-Comma").removeClass("isPressed");
                        wasCaught = true;
                        return;
                }

                if(!wasCaught){
                    if($(".keyboard-key-"+char).length > 0){
                        $(".keyboard-key-"+char).removeClass("isPressed");
                        event.preventDefault();
                    }
                }else{
                    event.preventDefault();
                }
            });
        });
    </script>
@endsection