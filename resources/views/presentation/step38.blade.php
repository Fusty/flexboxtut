@extends("presentation.master")

@section("title")
    Flexbox Step {{ $stepNum }}
@endsection

@section("head")
    <style>
        .calendar {
            align-self:center; /*Roughly equivelant to margin: 0 auto; when inside a flex container*/

            display:flex;
            flex-direction:column;
            justify-content:space-around;
            align-items:stretch;

            min-width:80vw;
            height:60vh;
            padding:20px;
        }

        .month {
            display:flex;
            flex-direction:row;
            justify-content:center;
            background-color: rgb(174, 177, 200);
        }

        .week-rows {
            flex: 1 0 14.28%;

            display:flex;
            flex-direction:column;
        }

        .week-label, .week {
            flex:1 0 auto;

            display:flex;
            flex-direction:row;
            justify-content:space-between;
            align-content:space-between;
        }

        .day-label, .day {
            min-width: 14.28%;
            padding: 20px;
            background-color: rgb(174, 177, 200);
        }

        /*Borders*/
        .month {
            border-left: 1px solid black;
            border-top: 1px solid black;
            border-right: 1px solid black;
        }
        .day-label, .day {
            border-bottom: 1px solid black;
            border-right: 1px solid black;
        }

        .day-label:nth-child(1), .day:nth-child(1) {
            border-left: 1px solid black;
        }

        .week-label:nth-child(1) {
            border-top: 1px solid black;
        }


    </style>
@endsection

@section("header")
    @include("presentation.header", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
    <div class="header-item header-brand" style="font-weight:normal;">Calendar</div>
@endsection

@section("content")
    <div class="calendar">
        <div class="month">
            <div>October</div>
        </div>
        <div class="week-rows">
            <div class="week-label">
                <div class="day-label">Sun</div>
                <div class="day-label">Mon</div>
                <div class="day-label">Tue</div>
                <div class="day-label">Wed</div>
                <div class="day-label">Thurs</div>
                <div class="day-label">Fri</div>
                <div class="day-label">Sat</div>
            </div>
            <div class="week">
                <div class="day"></div>
                <div class="day"></div>
                <div class="day"></div>
                <div class="day"></div>
                <div class="day">1</div>
                <div class="day">2</div>
                <div class="day">3</div>
            </div>
            <div class="week">
                <div class="day">4</div>
                <div class="day">5</div>
                <div class="day">6</div>
                <div class="day">7</div>
                <div class="day">8</div>
                <div class="day">9</div>
                <div class="day">10</div>
            </div>
            <div class="week">
                <div class="day">11</div>
                <div class="day">12</div>
                <div class="day">13</div>
                <div class="day">14</div>
                <div class="day">15</div>
                <div class="day">16</div>
                <div class="day">17</div>
            </div>
            <div class="week">
                <div class="day">18</div>
                <div class="day">19</div>
                <div class="day">20</div>
                <div class="day">21</div>
                <div class="day">22</div>
                <div class="day">23</div>
                <div class="day">24</div>
            </div>
            <div class="week">
                <div class="day">25</div>
                <div class="day">26</div>
                <div class="day">27</div>
                <div class="day">28</div>
                <div class="day">29</div>
                <div class="day">30</div>
                <div class="day">31</div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    @include("presentation.footer", ['stepNum' => $stepNum, 'maxSteps' => $maxSteps])
@endsection