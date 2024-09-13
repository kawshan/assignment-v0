window.addEventListener('load',function () {
    item=new Object();
    console.log("working");


    refreshItemForm();



})

refreshItemForm=()=>{

}




const addItem = ()=>{
    console.log("add called");

    const userConfirm=confirm("are you sure to add");
    if (userConfirm){
        let serverResponse=ajaxPostRequest("",item);

    }


}










