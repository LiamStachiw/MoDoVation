<!-- Template for a journal entry to display on the journals page-->

<div class="container d-flex flex-column flex-md-row justify-content-between">
    
    <h4> 

        <a href="/journal/{{ $journal->id }} ">
        
            {{ $journal->created_at->toFormattedDateString() }} 

        </a>

    </h4>

    {{ $journal-> body }}

</div>

<hr>