let mainPanelH = 0;
let mainPanel = null;

let accrodion = document.getElementsByClassName("accordion");
let i;


// console.log(accrodion.length);

for (i = 0; i < accrodion.length; i++) {
  accrodion[i].addEventListener("click", function() {
    this.classList.toggle("active");
    let panel = this.nextElementSibling; 
    mainPanel = panel; // to store document insted
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      mainPanelH =  panel.scrollHeight;
      panel.style.maxHeight = mainPanelH + "px";
      // console.log('main panel height  ' + panel.scrollHeight);
    }
  });
}




let subAccrodion = document.getElementsByClassName("sub-accordion");
let x;

for (x = 0; x < subAccrodion.length; x++) {
  subAccrodion[x].addEventListener("click", function() {
    this.classList.toggle("sub-active");
    let subPanel = this.nextElementSibling;
    if (subPanel.style.maxHeight) {
      subPanel.style.maxHeight = null;
    } else {
      subPanel.style.maxHeight = subPanel.scrollHeight + "px";
      mainPanel.style.maxHeight = mainPanelH + subPanel.scrollHeight + "px";
      // console.log(mainPanel);
      // console.log('sub panel height ' + subPanel.scrollHeight);
      
    }
  });
}



// to change navbar background on scroll 

let classHolder = document.getElementById("nav-finder");
    
window.addEventListener('scroll', (event) => {

    let scroll = this.scrollY;
    // console.log(scroll);
    if(scroll > 30){
      classHolder.className = "navbar navbar-expand-lg navbar-dark sticky-top navBg";
    } else{
      classHolder.className = "navbar navbar-expand-lg navbar-light sticky-top";

    }

})





function createCategory(catPrio){

  let selectedOp = document.getElementById('selectedOp');

  selectedOp.setAttribute('value', catPrio);
  selectedOp.innerHTML = catPrio;

  $('#exampleModal').modal('show');

}






// to popup and pass category id on the edit form + priority edit


function editCategory(id,catValue,catPrio){
    
  let editForm = document.getElementById('catEditForm');
  let editInput = document.getElementById('catEditInput');
  let editPriority = document.getElementById('editPrio');
  let selectOption = document.getElementById('currentPrio');
  

  let catId = '/edit_category/'+id;
  let categoryValue = catValue;
  let catPriority = catPrio;

  editForm.setAttribute("action",catId);
  editInput.setAttribute("value", categoryValue);
  editPriority.innerHTML = catPriority;
  selectOption.setAttribute("value", catPriority);
  selectOption.innerHTML = catPriority;

  $('#catModal').modal('show');

}


// to popup and pass question id on the edit form 


function editQuestion(id,qus,ans,catId,catName){
    
  let editForm = document.getElementById('qusEditForm');
  let editQus = document.getElementById('qusEdit');
  let editAns = document.getElementById('ansEdit');
  let catNamedom = document.getElementById('catName');
  let currentCatId = document.getElementById('currentCatId');


  let qusId = '/edit_question/'+id;
  let qusValue = qus;
  let ansValue = ans;
  let currentCatName = catName;
  let categoryId = catId;

  editForm.setAttribute("action",qusId);
  editQus.setAttribute("value", qusValue);
  // editAns.setAttribute("value", ansValue);
  editAns.value = ansValue;
  catNamedom.innerHTML = currentCatName;
  currentCatId.setAttribute("value", categoryId);

  $('#qusModal').modal('show');


}

//To set priority limit can't set more then cat elements



// window.onload = function(){

//     let arrLength = document.getElementById('arreyLength');
//     alert(arrLength.value);

// }

function setPriority(catId,catPrio,arrLength){
  
  $('#priorityModal').modal('show');
}


