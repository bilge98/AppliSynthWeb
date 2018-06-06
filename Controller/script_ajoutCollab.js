var inputCollab = document.getElementById("zoneCollab");
var cptCollab = 2;
function addCollab(){
    var input = document.createElement("input");
    input.name = "collaborateur"+cptCollab;
    input.placeholder = "Collaborateur";
    inputCollab.appendChild(input);
    cptCollab++;
}
 