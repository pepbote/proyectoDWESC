const titleAdd = document.getElementById("title-add");
const titleEdit = document.getElementById("title-edit");
const titleDelete = document.getElementById("title-delete");

titleAdd.addEventListener('click', function() { Ocultar("add") });
titleEdit.addEventListener('click', function() { Ocultar("edit") });
titleDelete.addEventListener('click', function() { Ocultar("delete") });

function Ocultar(a) {
    let form = document.getElementById(a);
    if (form.classList.contains("hidden")) {
        form.classList.remove("hidden");
        if (a !== "add") {
            document.getElementById("add").classList.add("hidden");
        }
        if (a !== "edit") {
            document.getElementById("edit").classList.add("hidden");
        }
        if (a !== "delete") {
            document.getElementById("delete").classList.add("hidden");
        }
    } else {
        form.classList.add("hidden");
    }
}
