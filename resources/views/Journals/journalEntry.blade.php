<!-- Template for a journal entry to display on the journals page-->

<div class="blog-post">
    
    <h2 class="blog-post-title"> 

        <a href="/journal/{{ $journal->id }} ">
        
            {{ $journal->title }} 

        </a>

    </h2>

    <p class="blog-post-meta"> 
        {{ $journal->created_at->toFormattedDateString() }} 
    </p>

    {{ $journal-> body }}

</div>

<hr>