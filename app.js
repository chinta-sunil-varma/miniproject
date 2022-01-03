function notlog(){
    alert("under devolopment try again later")
}

function displayname(a){
    const obj=document.querySelector(".username") // this  is the flex container and justify contents is set to space between
    const span=document.createElement("span")  // creating a span element to dispaly his name
    span.style.color="white" // making the span element content to be white
    span.innerHTML=`Welcome back <span style="color:#0a9396">${a}</span>` // making the username with distinct color to differentiate
    span.style.fontFamily="Arial, Helvetica, sans-serif"
    obj.appendChild(span) // appending the created span as an element to parent container username
}
function test(a,b){ // this function will dyanamically allot the space to pdf based on their count
  const div=document.createElement('div') // creating the div to append them finally into a flex box
  
  div.style.marginBottom="4em"
 
  // giving the divs margin so to make them clear
  div.style.minWidth="50%" // making the divs not to compress when more divs come on the way so the rest wraps below
 const img=document.createElement('img')
  img.src="file.png" // creating the image common to all pdf
  img.style.width='100px'
  img.style.height='100px'
  div.appendChild(img)
  const outer=document.querySelector(".displaypdf")
  outer.appendChild(div)
  const name= document.createElement('a') // creating a hyperlink 
  name.style.fontFamily="Verdana, Geneva, Tahoma, sans-serif" // setting font of hyperlink
  name.style.textDecoration="none" // removing the underline of hyperlink
  name.innerText=a // here the a corresponds to file name
  name.style.color="white"
  name.href=`uploadeddoc\\${b}\\${a}` // here the b corresponds to username
  name.style.display="block" // making them as block so they dont inline with image
  name.target="_blank" // opening the file in new tab
  div.appendChild(name)
}
function listadd(a){
 const selection = document.querySelector("select")
 const option = document.createElement("option")
 option.innerText=a
 selection.appendChild(option)



}
