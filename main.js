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