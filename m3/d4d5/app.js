function validate(){
    var name = document.getElementById("name").value;
    var address = document.getElementById("address").value;
    if (name == "" || address == "" ) {
        alert("Input Kosong, tolong dilengkapi");
        return false;
    }
}