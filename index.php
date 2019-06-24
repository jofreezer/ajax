<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax tutorial</title>

    <script src="js.js" type="text/javascript" ></script>
</head>
<body>
    <div id=container>
    <div id="btn">
    <button>sign up</button>
    <button>log in</button>
    <button onclick="contact_page();" >contact us</button>
    </div>
<div id="page">
<h1>home</h1>
</div>

    </div>

    <script>
    
    function _(el){
    return document.getElementById(el);
}

function data(php_file,el,send_data){
_el.innerHTML="Loading";
var hr=new XMLHttpRequest();
hr.open('POST',php_file,true);
hr.setRequestHeader("content-type","application/x-www-form-urlencoded");

hr.onreadystatechange=function(){
    if(hr.readyState ===4 & hr.status ===200){
        _(el).innerHTML= hr.responseText;
      
    }
};
hr.send(send_data);
}
function contact_page(){
    date("contact.php","page",null);
}
    </script>
</body>
</html>