
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

var EMPTY_NAME = 1;
var EMPTY_MAIL = 2;
var EMPTY_COMMENT = 3;

function checkForm(){
    var empty = [];
    if(isEmpty("input_name"))       empty.push(EMPTY_NAME);
    if(isEmpty("textarea_comment")) empty.push(EMPTY_COMMENT);
    if(0 < empty.length){
        return empty;
    }else{
        return true;
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
        var checkRes = checkForm();
        if(checkRes == true){
            return true;
        }else{
            // error check
            for(var i=0; i<checkRes.length; i++){
                if(EMPTY_NAME === checkRes[i]){
                    document.getElementById("str_name").style.color = "red";
                }
                if(EMPTY_COMMENT === checkRes[i]){
                    document.getElementById("str_comment").style.color = "red";
                }
            }
            alert("Name and Comment are required fields");
            return false;
        }
    }
}

