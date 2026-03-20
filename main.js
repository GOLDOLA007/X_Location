class new_addBtnInsert {

    static count_function(){
        let count = parseInt(localStorage.getItem("btnCount"));

        if(isNaN(count)){
            count = 0;
        }

        count++;

        localStorage.setItem("btnCount", count);

        return count;
    }

    static reset_count(){
        localStorage.removeItem("btnCount");
        return 0;
    }

    static get_count(){
        let count = parseInt(localStorage.getItem("btnCount"));

        if(isNaN(count)){
            return 0;
        }

        return count;
    }

}

/*
document.addEventListener("DOMContentLoaded", function(){

    new_addBtnInsert.reset_count();

    let count = new_addBtnInsert.get_count();

    let container = document.getElementById("dynamicButtons");
    let message = document.getElementById("emptyMessage");

    let addBtn = document.createElement("button");
    addBtn.className = "button_MainMenu";
    addBtn.type = "submit";
    addBtn.setAttribute("formaction", "insert_aRote_page.html");

    let addIcon = document.createElement("i");
    addIcon.className = "fa-solid fa-plus";

    addBtn.appendChild(addIcon);
    addBtn.append(" Add Route");

    container.appendChild(addBtn);

    if(count === 0){

        message.style.display = "block";

    }else{

        message.style.display = "none";

    }

    for(let i = 0; i < count; i++){

        let routeBtn = document.createElement("button");

        routeBtn.className = "button_MainMenu";
        routeBtn.type = "button";

        let icon = document.createElement("i");
        icon.className = "fa-solid fa-route";

        routeBtn.appendChild(icon);
        routeBtn.append(" Route " + (i+1));

        container.appendChild(routeBtn);

    }

});

*/