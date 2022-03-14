
    function calc(){

var n1=parseInt(document.getElementById('n1').value);
var n2=parseInt(document.getElementById('n2').value);


document.getElementById('total').value=n1*n2;
}

function getPrice(){
    var selectedValue=document.getElementById("select").value;
    document.getElementById("n2").value=selectedValue;

}

