function AboutUs(title ,contant, title_id,contant_id){
    this.title = title;
    this.contant = contant;
    this.title_id = title_id
    this.contant_id = contant_id
 }
 
 function validation(){
         let title = document.getElementById("search").value;
         // all title with there contant 
         const head1 = new  AboutUs("Community Empowerment:","Empower communities through educational initiatives, skill development programs, and sustainable projects, fostering independence and resilience.","Community_Empowerment","Community_Empowerment_contant")
         const head2 = new  AboutUs("Seasonal Support","Provide targeted support during specific seasons, addressing school needs and holiday essentials through our seasonal box initiative,ensuring families facing hardship receive assistance when it matters  most.","Seasonal_Support","Seasonal_Support_contant")
         const head3 = new  AboutUs("Community Empowerment:","To make a tangible and positive impact on the lives of individuals and communities facing adversity by providing essential support in the form of food, clothing, and other necessities.","Humanitarian_Impact","Humanitarian_Impact_contant")
         
         // keep it in the array 
         const about = [head1,head2,head3]
         if(title ===  "Community Empowerment")
         {
             document.getElementById(about[0].title_id).innerHTML =  about[0].title
             document.getElementById(about[0].contant_id).innerHTML =  about[0].contant
         }
         else if(title ===  "Seasonal Support")
         {
             document.getElementById(about[1].title_id).innerHTML =  about[1].title
             document.getElementById(about[1].contant_id).innerHTML =  about[1].contant
         }
         else if(title ===  "Community Empowerment")
         {
             document.getElementById(about[2].title_id).innerHTML =  about[2].title
             document.getElementById(about[2].contant_id).innerHTML =  about[2].contant
         }
         // if not any then display massage 
         else{
             alert("wrong choice try again")
             title.focus(); 
         }
 }
 
 // go to the next page that the user could search 
 function search(){
     window.location.href = "table_obj2.html";
 } 