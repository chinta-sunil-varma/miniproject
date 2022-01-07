function addinput(){
    let innersec=document.querySelector(".innersec")
    let form = document.querySelector("#form")
    let input=document.createElement("input")
    // let sec1 = document.createElement("section")
    input.required=true
    let ran=Math.floor((Math.random()*1000)+1)
    input.name="text"+ran
    let label =document.createElement("label")
    
    label.innerText="enter your page no"
    label.style.fontFamily="Montserrat"
    
    label.appendChild(input)
    form.appendChild(label)
    

    let br2= document.createElement("br")
    form.appendChild(br2)
    
    
    let input1=document.createElement("textarea")
    
    let label1 =document.createElement("label")
    // let sec2 = document.createElement('section')
    label1.innerText="enter the discription"
    label1.style.fontFamily="Montserrat"
    input1.required=true
    label1.appendChild(input1)
    form.appendChild(label1)
    let ran1=Math.floor((Math.random()*1000)+1)
    input1.name="textarea"+ran1
    let br = document.createElement("br")
    form.appendChild(br)
    let br1 = document.createElement("br")
    form.appendChild(br1)
    innersec.appendChild(form)
}
function showbook(a,b){ //a=page;b=discription
    const para=document.createElement("p")
    const viewbook=document.querySelector(".viewbook")
    para.style.color="#e5383b"
    para.style.cursor="pointer"
    para.style.textDecoration="underline"
    para.style.fontFamily="Sans-serif"
    const iframeobj=document.querySelector("#iframeobj")
    const src =iframeobj.src
    para.innerText=`page ${a}`
    para.id="par"+" "+a
    const para1=document.createElement("p")
    para1.innerText=`DESCRIPTION: ${b}`
    para1.style.fontFamily="Sans-serif"
    
    viewbook.appendChild(para)
    viewbook.appendChild(para1)
    para.addEventListener('click',iframe1)

    
}
// function stand(){
    
// }

function iframe1(e){ //pageno=a;b=link
    const ide=e.target.id
    const arr=ide.split(' ')
    const page=arr[1]
    const iframeobj=document.querySelector("#iframeobj")
    const link=iframeobj.src
    const org=link.split("#")
    iframeobj.src=org[0]+`#page=${page}`
    
    iframeobj.contentWindow.location.reload()
    // pageno=evt.target.name
    // const iframeobj=document.querySelector("#iframeobj")
    // const link=iframeobj.src
    // iframeobj.src=link+pageno
    // iframeobj.contentWindow.location.reload()

}

