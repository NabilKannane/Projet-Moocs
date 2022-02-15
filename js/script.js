
 /* BUTTON SHOW HIDE */

let btn = document.querySelector('.btn');
let sidebar = document.querySelector('.sidebar');
let container = document.querySelector('.container');
let msgdefault = document.querySelector('.default');
let clicked = new Array();
let var_clk="" ;
let last_id = "";

btn.classList.add('click');
sidebar.classList.add('show');
container.classList.add('aside_on');
btn.addEventListener("click" , ()=>{
    btn.classList.toggle('click');
    sidebar.classList.toggle('show');
    container.classList.toggle('aside_on');
})



let aside_btns = document.querySelector('.aside_content');

aside_btns.addEventListener('click' , (e)=>{
   
    var show = document.querySelector('#sous_'+e.target.getAttribute("value"));
    show.classList.toggle("show");
    
show.addEventListener('click', (ee)=>{
    msgdefault.innerHTML="";

    clicked = ee.target.getAttribute('value').split('/');
    var_clk = var_clk.replace(last_id, "");
    var_clk = ee.target.getAttribute('value');

    for(i=0 ; i<=clicked.length ; i++){
        last_id = clicked.shift();
        data = data[last_id];

    }

    container.innerHTML = "";
  for(items in data){

    container.innerHTML += `
<div class="video">
    <div class="displayflex">
        <video controls width="200%">
        <source src="./moocs/${var_clk}/${items}" type="video/mp4">
          Sorry, your browser doesn't support embedded videos.
        </video><br>
        <div class="vid_info">
        <span class="titre_vid"><b>${items}</b></span><br><br>
      <h5 class="h3apropos">À propos de ce cours :</h5>
         <p class="apropos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat cum voluptatum illo reiciendis odio aperiam saepe libero magnam quia, ipsa doloribus at optio, vel eum tenetur tempora? Quis, itaque ab.

        </p>
        </div>
    </div>
</div>
    `;

  }


  myjson();
    console.log(data);
    //une fois clicker ajouter ee.target.getAttribute('value');
})




})


/******************** JSON ********************/
let data = new Array();

function myjson(){
let rqst = new XMLHttpRequest();
    rqst.open("POST","./json.php");
    rqst.onload = function(){
        if (rqst.status == 200 && rqst.readyState == 4){
            data = JSON.parse(rqst.response);
              
          //   console.log(data);
                
        }
        else console.log("Erreur API");
    }

    rqst.send();
}
myjson();
/*=============================================*/

  function reloadContainer(tree){

          /*  for (item in tree){
                container.innerHTML += `
                    <div id="${item}" name="" class="item">
                        <br>
                        <div class="title">${item}</div>
                    </div>`;
            };
            */


        }

   



