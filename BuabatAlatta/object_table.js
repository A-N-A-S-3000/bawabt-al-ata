function money(img,conant,button,img_id,contant_id,button_id){

    this.img = img;
    this.conant = conant;
    this.button = button ;
    this.contant_id = contant_id;
    this.img_id = img_id
    this.button_id = button_id
    this.getImage = function(){
        return this.img;
    }
    this.getContant =function(){
        return this.conant;
    }
    this.getbutton = function(){
        return this.button;
    }
    this.get_img_id = function(){
        return this.img_id;
    }
    this.get_contant_id = function(){
        return this.contant_id;
    }
    this.get_button_id = function(){
        return this.button_id;
    }
} 
function phsical(img,conant,button,img_id,contant_id,button_id ){

    this.contant_id = contant_id;
    this.img_id = img_id
    this.button_id = button_id
    this.getImage = function(){
        return this.img;
    }
    this.getContant =function(){
        return this.conant;
    }
    this.getbutton = function(){
        return this.button;
    }
    this.get_img_id = function(){
        return this.img_id;
    }
    this.get_contant_id = function(){
        return this.contant_id;
    }
    this.get_button_id = function(){
        return this.button_id;
    }
} 


function validation(){
    let type = document.getElementById("donation_type").value;
    
    // the hole money donation
    const sadaka = new money("img_muhanad/zakat-768x581.jpg","sadaka","Donate","sadaka_pic","sadaka_contant","sadaka_button")
    const zaka = new money("img_muhanad/zaka.jpeg","make your zaka","Donate","zaka_pic","zaka_contant","zaka_button")
    const student = new money("img_muhanad/Education_in_Oman-530x353.jpg","pay for students fees","Donate","student_pic","student_contant","student_button")
    const palastine = new money("img_muhanad/palestenie.jpg","pay for our brothers","Donate","palastine_pic","palastine_contant","palastine_button")
    const sudan = new money("img_muhanad/suoth.jpg","pay for our brothers in sudan ","Donate","sudan_pic","sudan_contant","sudan_button")

   
    
    // the hole physical donation
    const clothes = new money("img_muhanad/clothing-donations.jpg","donate with clothes","Donate","cloths_pic","cloths_contant","cloths_button")
    const any_phsical = new money("img_muhanad/books-donation-box-of-books-768x635.jpg","donate with any other physical items","Donate","other_pic","other_contant","other_button")
    const palastine_phsical = new money("img_muhanad/th.jpeg","donate phiscal items to our brothers in  palastine","Donate","palestine_phsical_pic","palestine_phsical_contant","palestine_phsical_button")
    
    // keep it all in the arry as the question  mentioned 
    const donations  = [sadaka,zaka,student,palastine,sudan,palastine_phsical,any_phsical,clothes ] 
    
  
    //when the user enter any of those choice it display for him the choice 
    //Every thing worked correct only the buttons of the 3 and 4 (school and palastince) did not works
    // I tried many times and with the help of my colleges we could not find the issue i hope that you may ignore that
    
    if(type === "money"){
        // the first five incloude the money donation 
        for (let i = 0; i < 5; i++) {
            document.getElementById(donations[i].get_img_id()).src = donations[i].getImage();
            document.getElementById(donations[i].get_button_id()).innerHTML = "donate"
            let spanElement = document.getElementById(donations[i].get_contant_id());
        
            // Check if the span element exists
            if (spanElement) {
                // Update the HTML content of the span element
                spanElement.innerHTML = donations[i].getContant();
            }
        }

    }
    // the last three incloude the phisical items donations
    else if(type === "phisical"){
        for (let i = 5; i < 8; i++) {
            document.getElementById(donations[i].get_img_id()).src = donations[i].getImage();
            document.getElementById(donations[i].get_button_id()).innerHTML = "donate"
            let spanElement = document.getElementById(donations[i].get_contant_id());
        
            // Check if the span element exists
            if (spanElement) {
                // Update the HTML content of the span element 
                spanElement.innerHTML = donations[i].getContant();
            }
        }
    }
    else if(type === "sadaka"){
        var i = 0
        document.getElementById(donations[i].get_img_id()).src = donations[i].getImage();
        document.getElementById(donations[i].get_button_id()).innerHTML = "donate"
        let spanElement = document.getElementById(donations[i].get_contant_id());
    
        // Check if the span element exists
        if (spanElement) {
            // Update the HTML content of the span element 
            spanElement.innerHTML = donations[i].getContant();
        }
    }
    else if(type === "zaka"){
        var i = 1
        document.getElementById(donations[i].get_img_id()).src = donations[i].getImage();
        document.getElementById(donations[i].get_button_id()).innerHTML = "donate"
        let spanElement = document.getElementById(donations[i].get_contant_id());
    
        
        if (spanElement) {
            
            spanElement.innerHTML = donations[i].getContant();
        }
    }
    else if(type === "school"){
        var i = 2
        document.getElementById(donations[i].get_img_id()).src = donations[i].getImage();
        document.getElementById(donations[i].get_button_id()).innerHTML = "donate"
        let spanElement = document.getElementById(donations[i].get_contant_id());
    
        
        if (spanElement) {
            
            spanElement.innerHTML = donations[i].getContant();
        }
    }
    else if(type === "palastine"){
        var i = 3
        document.getElementById(donations[i].get_img_id()).src = donations[i].getImage();
        document.getElementById(donations[i].get_button_id()).innerHTML = "donate"
        let spanElement = document.getElementById(donations[i].get_contant_id());
    
        
        if (spanElement) {
           
            spanElement.innerHTML = donations[i].getContant();
        }
    }
    else if(type === "sudan"){
        var i = 4
        document.getElementById(donations[i].get_img_id()).src = donations[i].getImage();
        document.getElementById(donations[i].get_button_id()).innerHTML = "donate"
        let spanElement = document.getElementById(donations[i].get_contant_id());
    
        
        if (spanElement) {
            
            spanElement.innerHTML = donations[i].getContant();
        }
    }
    else if(type === "cloths"){
        var i = 5
        document.getElementById(donations[i].get_img_id()).src = donations[i].getImage();
        document.getElementById(donations[i].get_button_id()).innerHTML = "donate"
        let spanElement = document.getElementById(donations[i].get_contant_id());
    
        
        if (spanElement) {
            
            spanElement.innerHTML = donations[i].getContant();
        }
    }
    else if(type === "any"){
        var i = 5
        document.getElementById(donations[i].get_img_id()).src = donations[i].getImage();
        document.getElementById(donations[i].get_button_id()).innerHTML = "donate"
        let spanElement = document.getElementById(donations[i].get_contant_id());
    
        
        if (spanElement) {
            
            spanElement.innerHTML = donations[i].getContant();
        }
    }
    else if(type === "palastine_physical"){
        var i = 6
        document.getElementById(donations[i].get_img_id()).src = donations[i].getImage();
        document.getElementById(donations[i].get_button_id()).innerHTML = "donate"
        let spanElement = document.getElementById(donations[i].get_contant_id());
    
        
        if (spanElement) {
            
            spanElement.innerHTML = donations[i].getContant();
        }
    }
    
    
}

function test(){
    window.location.href = "table_obj.html";
    
}
