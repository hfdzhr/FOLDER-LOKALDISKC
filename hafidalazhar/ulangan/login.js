var attempt = 0;
function validate()
{
    var Email = document.getElementById("Email").value;
    var Password = document.getElementById("Password").value;
    if ( Email == "12345@gmail.com" && Password == "12345"){
        alert ("Login SUKSES");
        Window.open("../hafidalazhar/ulangan/index.html")
    }
}