$(document).ready(function(){
                var url = "WebHandlers/Department.php";
$.post(url,{operation: "List"},function(response){
                
               var obj = JSON.parse(response)
               
               var status = obj[0].Status
               var num_rows = 0
               var html = "";
    if (status==="OK"){
         num_rows = obj[0].Rows_Retrieved
        
         for (i=0;i<num_rows;i++){
             
             html += "<tr><td class=val>" + obj[1][i].Description + "</td><td><a href=javascript:handleEdit("+ obj[1][i].ID +") class='linkedit'>Edit</a></td><td><a href=javascript:handleDelete(" + obj[1][i].ID + ") class='linkdelete'>Delete</a></td></tr>";
         }
         $('#tbldepts').append(html)
    }           
   
               
                })
$('#btnadd').bind('click',function(){
    
    bootbox.prompt("Enter Department Description",function(response){
        if (response==null){
            bootbox.hideAll()
            
        }
        else if (response.length<=0){
            bootbox.hideAll()
            bootbox.alert("Description Field Cannot Be Empty")
        }
        else {
            $.post(url,{operation: "Add",description: response},function(resp){
                alert(resp)
                var obj = JSON.parse(resp);
                if (obj.Status === "OK"){
                    bootbox.alert(obj.Description)
                    var html = "<tr><td>" + response + "</td><td><a href=javascript:handleEdit("+ obj[1][i].ID +")>Edit</a></td><td><a href=javascript:handleDelete("+ obj[1][i].ID +")>Delete</a></td></tr>";
                    $('#tbldepts').append(html)
                }
            });
        }
        })
    })
    $('.tbldept').on('click','.linkedit',function(){
        alert($(this))
    })
    })
function handleDelete(id){
    
}
function handleEdit(id){
    alert(id)
   
    var elem = $(this)
    alert(elem.innerHTML)
}