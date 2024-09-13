//define function for post ajax request
const ajaxPostRequest = (url,object)=>{

    let postServerResponse;
    $.ajax(url,{
        async: false,
        type: "POST",
        contentType: "application/json",
        data:JSON.stringify(object),
        success:function (data){
            console.log("success "+data);
            postServerResponse=data;
        },
        error:function (restOb){
            console.log(restOb);
            postServerResponse=restOb;
        }
    });
    return postServerResponse
}