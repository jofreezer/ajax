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