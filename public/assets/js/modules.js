
function isEmpty(id){
    var text = document.getElementById(id).value;
    if(0 < text.length){
        return false;
    }else{
        return true;
    }
}

function isMailAddr(text){

}


function textLengthCheck(text, min, max){
    var len = text.length;
    if(min <= len && len < max){
        return true;
    }else{
        return false;
    }
}

function checkForm(){
    if((!isEmpty("input_name")) && (!isEmpty("textarea_comment"))){
        return true;
    }else{
        return false;
    }
}

function submitBtnCtrl(){
    if(checkForm()){
        document.getElementById("input_submit").disabled = false;
    }else{
        document.getElementById("input_submit").disabled = true;
    }
}

function init(){
    document.getElementById("comment_form").onsubmit = function(){
        if(checkForm()){
            return true;
        }else{
            alert("Name and Comment are required fields");
            return false;
        }
    }
}

