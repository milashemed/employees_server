$(document).ready(function(){
                var url = "WebHandlers/Department.php";
$.post(url,{operation: "List"},function(response){
                alert(response)
                })
$('#btnadd').bind('click',function(){
    
    bootbox.prompt("Enter Department Description",function(response){
        if (response.length<=0){
            alert("Please Enter a Department Description");
        }
        else {
            $.post(url,{operation: "add",description: response},function(resp){alert(resp)});
        }
        })
    })    
    })
