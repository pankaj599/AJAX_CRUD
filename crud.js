$(document).ready(function(){
    responsedata();
});

function responsedata()
{
   $.ajax(
       {
           url:"crud.php",
           type:"post",
           success:function(data_1)
           {
               $("#tablebody").html(data_1);
           }
       }
   )
};

    $("#saveform").click(function()
    {
        $.ajax(
            {
                url:"crud.php",
                type:"POST",
                data:$("form div input").serialize(),
                success:function()
                {
                    responsedata();
                    //alert(status);
                }
            }
        )
    });

function del(aaja)
{
    let collect=aaja;
    console.log(collect);
    ($.ajax(
        {
            url:"crud.php",
            type:"post",
            data:{datapost:collect},
            success:function()
            {
                responsedata();
            }
        }
    )
    )};

    function change(idata)
    {
        //console.log(idata);
        //var i=idata;
        $('#update_hidden').val(idata);
        $.ajax(
            {
                url:"crud_2.php",
                type:"post",
                data:{id:idata},
                success:function(update_data)
                {
                    //console.log(update_data);
                    var up=JSON.parse(update_data);
                    $('#update_name').val(up.name);
                    $('#update_password').val(up.password);
                    
                }
            }
        );
        $('#update_modal').modal("show");
    };
       function update()
        {
            var i=parseInt($('#update_hidden').val());
            console.log(i);
            $.ajax(
                {
                    url:"crud_2.php",
                    type:"post",
                    data:{updatename:$('#update_name').val(),
                            updatepassword:$('#update_password').val(),
                            userid:i},
                    success:function()
                    {
                        responsedata();
                        
                    }
                }
            );
        };
    

