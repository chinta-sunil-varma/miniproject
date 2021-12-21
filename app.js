function notlog(){
    alert("under devolopment try again later")
}

function displayname(a){
    const obj=document.querySelector(".username")
    const span=document.createElement("span")
    span.style.color="white"
    span.innerHTML="Welcome Back  "+a
    span.style.fontFamily="Arial, Helvetica, sans-serif"
    obj.appendChild(span)
}