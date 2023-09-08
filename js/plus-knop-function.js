var items = document.getElementsByClassName("NewItem")

function add(){
document.getElementById("createmenu").style.display = "block"
}

function close(){
    document.getElementById("createmenu").style.display = "none"
}

function check(id){
    console.log(id)
}

function complete(){
    if (document.getElementById("completedscreen").style.display == "") {
        for (const element of items) {
            element.style.display = "none"
        }
        document.getElementById("completedscreen").style.display = "block"
        document.getElementById("spin").style.transform = 'rotate(180deg)'
        
    }
    else if (document.getElementById("completedscreen").style.display == "block") {
        for (const element of items) {
            element.style.display = "grid"
        }
        document.getElementById("completedscreen").style.display = "none"
        document.getElementById("spin").style.transform = 'rotate(360deg)'
    }
    else if (document.getElementById("completedscreen").style.display == "none") {
        for (const element of items) {
            element.style.display = "none"
        }
        document.getElementById("completedscreen").style.display = "block"
        document.getElementById("spin").style.transform = 'rotate(180deg)'
    
    }
}   