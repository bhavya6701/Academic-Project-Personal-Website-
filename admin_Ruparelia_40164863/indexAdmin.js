var contactMessages = document.getElementById("admin-contact__inputfile");


var logout = document.getElementById("admin-logout__button");

if(contactMessages!=null)
    contactMessages.addEventListener("change", readMessages);
if(logout!=null)
    logout.addEventListener("click", processLogout);

function readMessages() {
    var fileReader = new FileReader();
    fileReader.onload = function() {
        document.getElementById("display_messages").innerHTML = "";
        console.log(fileReader.result);
        var arr = fileReader.result.trim().split("\n\n");

        let table = document.createElement("table");
        let tbody = document.createElement("tbody");
        table.appendChild(tbody);
        
        for(let i=0;i<arr.length;i++) {
            let arr2 = arr[i].split("\n");
            let tr = document.createElement("tr");
            let td = document.createElement("td");
            td.innerHTML = i+1;
            let td2 = document.createElement("td");
            let text = "";
            for(let j=0;j<arr2.length;j++) {
                text += arr2[j] + "<br />";
            }
            td2.innerHTML = text.trim();
            td.style.border = "2px black solid";
            td.style.width = "10%";
            td2.style.border = "2px black solid";
            tr.appendChild(td);
            tr.appendChild(td2);
            tbody.appendChild(tr);
        }
        table.style.marginLeft = "auto";
        table.style.marginRight = "auto";
        table.style.border = "2px black solid";
        document.getElementById("display_messages").style.fontSize = "x-large";
        document.getElementById("display_messages").appendChild(table);
    };
    fileReader.readAsText(contactMessages.files[0]);
}

function processLogout() {
    sessionStorage.clear(); 
}