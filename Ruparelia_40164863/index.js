btnContact = document.getElementById("btnContact");
btnAdmin = document.getElementById("Enter");

if(btnContact!=null)
    btnContact.addEventListener("click", download);
if(btnAdmin!=null)
    btnAdmin.addEventListener("click", processLogin);
    
function download() {
    if(document.getElementById("Name").value == "" || document.getElementById("Email").value == "" || document.getElementById("Number").value == "" || document.getElementById("abcd").value == "")
        return;
    let Data = document.getElementById("Name").value + "\n" + document.getElementById("Email").value + "\n" + document.getElementById("Number").value + "\n" + document.getElementById("abcd").value;
    let file = new File([Data], "contact_me_details", {type: "text/plain"});
    let anchorTag = document.createElement("a");
    anchorTag.href = window.URL.createObjectURL(file);
	anchorTag.download = "contact_me_details";
	anchorTag.click();
}

function processLogin() {
    if(document.getElementById("checkName").value == "Bhavya" && document.getElementById("checkPassword").value == "123456") {
        console.log("working");
        window.open("verification.php");
        sessionStorage.setItem("name", document.getElementById("checkName"));
        sessionStorage.setItem("password", document.getElementById("checkPassword"));
        sessionStorage.setItem("time", (new Date()).toLocaleString());
        sessionStorage.setItem("user_agent", navigator.userAgent());
    }
    else {
        alert("Invalid Login. Try Again!");
    }
}   