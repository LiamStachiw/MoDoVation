$(document).ready(function() {


    $('.taskCheckbox').on('change', function(){

        var $taskId = $(this).attr("id"); // gets task ID of clicked checkbox
        var $checked = $(this).is(':checked'); // gets if checkbox is checked or not
        var $goalId = $(this).attr("data-goalId");
        var $url;

        if($goalId != ""){
            $url = "/goal/"+$goalId+"/updateTasks";
        }else{
            $url = "/task/"+$taskId+"/updateTasks";
        }

        if($checked === false){

            $checked = 0;

        }else if($checked === true){

            $checked = 1;

        };

        $.ajax({
            type: "GET",
            url: $url,
            data: {
                'taskId':$taskId, 
                'checked':$checked
            },
            success:function(returnCode){
                checkAllDone(returnCode);
            }
          });
    });


    /* If all tasks are complete, reload the page */
    function checkAllDone(returnCode){

        if(returnCode == 'y'){
            location.reload();
        };

    };
});