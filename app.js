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
  div.style.minWidth="25%"
 const img=document.createElement('img')
  img.src="https://cdn-icons.flaticon.com/png/512/1975/premium/1975643.png?token=exp=1640280348~hmac=57d38f83f916c613129bf0fb3cdefb3e"
  img.style.width='120px'
  img.style.height='120px'
  div.appendChild(img)
  const outer=document.querySelector(".displaypdf")
  outer.appendChild(div)
  const name= document.createElement('a')
  name.innerText=a
  name.style.color="white"
  name.href=`uploadeddoc\\${b}\\${a}`
  name.style.display="block"
  name.target="_blank"
  div.appendChild(name)
}
