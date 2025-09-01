<h2>{{ $job->title }}</h2>
<p>
    Congrats, your job is now live on our website!
</p>
<p>
    You can view it <a href="{{ url('/jobs/' . $job->id) }}">here</a>.
</p>
