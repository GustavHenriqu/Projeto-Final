let accountButton = document.querySelector(".img-button");
let profileContainer = document.querySelector(".accout-profile");

accountButton.addEventListener("click", function() {

    if(profileContainer.classList.contains("loggedOpen")) {
        setTimeout(() => {   
               profileContainer.style.display = "none"
                  }, 250); 
    }


    profileContainer.style.display = "block"

    setTimeout(() => {   
    profileContainer.classList.toggle("loggedOpen");
          }, 1); 

})