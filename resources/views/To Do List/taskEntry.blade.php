<div class="container d-flex flex-column flex-md-row justify-content-between">
    

<li align="center">
          
    <input id="{{ $task->id }}" data-goalId="{{ $task->goal_id }}" class="taskCheckbox" type="checkbox" value="{{ $task->taskName }}" 
        @if($task->isComplete == 1) checked @endif
        @if($task->isDisabled == 1) disabled @endif> 
    <a href="/task/{{ $task->id }} ">
        {{ $task->taskName }} 
    </a> 
</li>

</div>

