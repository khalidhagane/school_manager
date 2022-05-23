let matricule = document.getElementById('matricule')
let name = document.getElementById('name')
let genre = document.getElementById('genre')
let address = document.getElementById('address')
let date_naissance = document.getElementById('date_naissance')
let email = document.getElementById('email')
let matricule_p = document.getElementById('matricule_p') 


let error_matricule = document.querySelector('.matricule');
let error_name = document.querySelector('.name');
let error_genre = document.querySelector('.genre');
let error_address = document.querySelector('.address');
let error_date_naissance = document.querySelector('.date_naissance');
let error_email = document.querySelector('.email');
let error_matricule_p = document.querySelector('.matricule_p');



form.addEventListener('submit',function(e){

    if(matricule.value == ""){
        
        error_matricule.innerHTML="le champs username est requis.";
        error_matricule.style.color='red';
        e.preventDefault();
    }
    

    if(name.value.trim()==""){
        
        error_name.innerHTML="le champs email est requis.";
        error_name.style.color='red';
        e.preventDefault();
    }
   
    if(genre.value.trim()==""){
        
        error_genre.innerHTML="le champs password est requis.";
        error_genre.style.color='red';
        e.preventDefault();
    }
    

    if(address.value.trim()==""){
        
        error_address.innerHTML="le champs password est requis.";
        error_address.style.color='red';
        e.preventDefault();
    }
    

    if(date_naissance.value.trim()==""){
        
        error_date_naissance.innerHTML="le champs password est requis.";
        error_date_naissance.style.color='red';
        e.preventDefault();
    }
    

    if(email.value.trim()==""){
        
        error_email.innerHTML="le champs password est requis.";
        error_email.style.color='red';
        e.preventDefault();
    }
   
    if(matricule_p.value.trim()==""){
        
        error_matricule_p.innerHTML="le champs password est requis.";
        error_matricule_p.style.color='red';
        e.preventDefault();
    }
   
    if(password1.value!==password2.value){
        errorPss.innerHTML="password aren't match.";
        errorPss.style.color='red';
        e.preventDefault();
        
    }

    
})   