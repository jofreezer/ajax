<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax-2-local json</title>
</head>
<body>
    <button id="btn2">Get user</button>
    

    <br><br>
  
    <h1>Users</h1>
    <div id="users"></div>



    <script>
 
    document.getElementById('btn2').addEventListener
    ('click',loadusers);

    


    function loadusers(){
        var hr=new XMLHttpRequest;
        hr.open('GET','js3user.php',true);

        hr.onreadystatechange=function(){
            if(hr.readyState==4 && hr.status==200){
            var users=JSON.parse(hr.responseText);
            // console.log(user.name);
            var output='';
             for(var i in users){        
                
                output +='<ul>'+
            '<li> id: '+users[i].id+'</li>'+
            '<li>name: '+users[i].name+'</li>'+
            '</ul>';

        } 
            document.getElementById('users').innerHTML=output;

        }
        };
        hr.send();

    }

    </script>
</body>
</html>