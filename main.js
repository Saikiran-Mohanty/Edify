// const { server } = require("websocket");

const putMsg = (msg) => {
    document.getElementById("msg").innerHTML = `${msg}`;
}

function makeRequest(){
    console.log("preparing to send...");

    // get all required data from the client like image or url, etc.
    var formData = new FormData();
    let file = document.getElementById("ocr").getElementsByTagName("input")[0]; // read file from input 
    console.log(file.files[0]);
    formData.append("file", file.files[0]); // put image file here
    // formData.append("url", "https://metalbyexample.com/wp-content/uploads/figure-65.png"); // if url put here
    formData.append("language", "eng"); // select language
    formData.append("apikey", "1b6eaefe7b88957"); // api key

    // make xhr request
    let xhr = new XMLHttpRequest();
    xhr.onload = () => { // this func will be called on getting response
        if(xhr.status == 200){
            console.log(xhr);
            try{
                let jsonObj = JSON.parse(xhr.response); // this is json Resp
                console.log(jsonObj.ParsedResults[0].ParsedText);
                putMsg(jsonObj.ParsedResults[0].ParsedText);
            }
            catch(e){
                console.log(e);
                putMsg("Error");
            }
        }
        else {
            putMsg("Something went wrong");
        }
    };
    xhr.open("POST", "https://api8.ocr.space/parse/image");
    xhr.send(formData);
}


function main(){
    console.log("Started...");
    let btn = document.getElementById("ocr").getElementsByTagName("button")[0];
    btn.addEventListener('click', makeRequest);
    let im = document.getElementById("ocr").getElementsByTagName("input")[0];
    im.addEventListener('change', showImage);
    console.log("main done");
}

window.addEventListener('load', main);

// ==============================================Virtual IDE=====================================================
function run(){
var program = {
    script : document.getElementById("msg").value,
    language: document.getElementById("languages").value,
    versionIndex: "0",
    clientId: "b383688a34b2fb122a12ac982afa4ddf",
    clientSecret:"610fa1a75a95328e1d3113fd7b993744140412daedd07125b2c7148c9147b6c6"
};
fetch("https://api.jdoodle.com/v1/execute",{
    method: "POST",
    json: program
}).then(response=>{
    console.log('statusCode:', response && response.statusCode);
    console.log(body);
    document.getElementById("output").innerHTML=body.output;
}).catch(err => {
	console.error(error);
});
   
}

run();