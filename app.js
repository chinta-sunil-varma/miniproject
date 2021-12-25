function notlog(){
    alert("under devolopment try again later")
}

function displayname(a){
    const obj=document.querySelector(".username")
    const span=document.createElement("span")
    span.style.color="white"
    span.innerHTML=`Welcome back <span style="color:#0a9396">${a}</span>`
    span.style.fontFamily="Arial, Helvetica, sans-serif"
    obj.appendChild(span)
}
function test(a,b){
  const div=document.createElement('div')
  
  
  div.style.margin="2em"
  div.style.minWidth="25%"
 const img=document.createElement('img')
  img.src="https://cdn-icons-png.flaticon.com/128/337/337946.png"
  img.style.width='100px'
  img.style.height='100px'
  div.appendChild(img)
  const outer=document.querySelector(".displaypdf")
  outer.appendChild(div)
  const name= document.createElement('a')
  name.style.fontFamily="Verdana, Geneva, Tahoma, sans-serif"
  name.style.textDecoration="none"
  name.innerText=a
  name.style.color="white"
  name.href=`uploadeddoc\\${b}\\${a}`
  name.style.display="block"
  name.target="_blank"
  div.appendChild(name)
}
