<div>
    <h1>
        Job board
    </h1>
    @foreach ($jobs as $job)
        <div>
            the job is
            
            {{ $job['title'] }}
            <br> salary is
            {{ $job['salary'] }}
        </div>
    @endforeach
</div>
