    <div class="content">
        <a style="float: left; display: inline" href="/task/{{ $task->id }} ">
            {{ $task->taskName }} 
        </a> 
        <input style="float: right; display: inline" id="{{ $task->id }}" data-goalId="{{ $task->goal_id }}" class="taskCheckbox" type="checkbox" value="{{ $task->taskName }}" 
            @if($task->isComplete == 1) checked @endif
            @if($task->isDisabled == 1) disabled @endif> 
    </div>