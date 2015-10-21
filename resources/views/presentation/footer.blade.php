@if($stepNum > 1)
<div class="footer-item footer-prev">
    <a class="btn btn-warning" href="{{ URL::to('step/'.($stepNum-1)) }}" style="color:#1976d2;">Previous Step</a>
</div>
@endif
@if($stepNum < $maxSteps)
<div class="footer-item footer-next">
    <a class="btn btn-warning" href="{{ URL::to('step/'.($stepNum+1)) }}" style="color:#1976d2;">Next Step</a>
</div>
@endif
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=desert&lang=css&lang=ml"></script>

