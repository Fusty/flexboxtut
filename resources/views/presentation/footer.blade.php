@if($stepNum > 1)
<div class="footer-item footer-prev">
    <a class="btn btn-warning" href="{{ URL::to('step/'.($stepNum-1)) }}" style="color:rgb(34, 149, 101);">Previous Step</a>
</div>
@endif
@if($stepNum < $maxSteps)
<div class="footer-item footer-next">
    <a class="btn btn-warning" href="{{ URL::to('step/'.($stepNum+1)) }}" style="color:rgb(34, 149, 101);">Next Step</a>
</div>
@endif
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=desert"></script>

