function validate(){
    var tEmail = "ramadhanbhg@gmail.com";
    var tPassword = "unero";
    var email = document.forms["login"]["email"].value;
    var password = document.forms["login"]["password"].value;
    if (email == "" || password == "" ) {
        alert("Input Kosong");
        return false;
    } else if (email != tEmail && password != tPassword) {
        document.getElementById('peringatan').style.display = 'block';
        return false;
    } else {
        alert("Anda Berhasil Login!");
        return true;
    }
}