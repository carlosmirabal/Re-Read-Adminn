function validacionForm() {
    // alert('hello World');
    // Con el value podremos ver el valor que tiene el ID email
    var email=document.getElementById('email').value;
    var passwd=document.getElementById('psswd').value;

    /*if (email=='' && passwd=='' ) {
      alert('Ningún campo esta relleno')
    }else if (email=='') {
        alert('El campo de email esta vacio');
    }else if (passwd=='') {
            alert('El passwdord no esta relleno');
    }
    else {
        return true;
    }
    // El false es para parar la ejecución del codigo
    return false;*/
    var mensage=document.getElementById('message');
    
    if (email=='' && passwd=='' ) {
        // mensage.innerHTML='<p style="color:red">Los dos campos estan vacio</p>';
        mensage.innerHTML='<p style=" border-radius: 4px; padding: 14px 20px; color:black;">Inténtalo de nuevo.</p>';
        document.getElementById('email').style.borderColor = "red";
        document.getElementById('psswd').style.borderColor = "red";
        document.getElementsByTagName('label').style.color="red";
        // document.getElementById('message').style.backgroundColor = "#f6bebe";
        // document.getElementById('submit').style.backgroundColor = "red";
        
    }else if (email=='') {
        // mensage.innerHTML='<p style="color:red">El campo de email esta vacio</p>';
        mensage.innerHTML='<p style=" border-radius: 4px; padding: 14px 20px; color:black;">Inténtalo de nuevo.</p>';
        document.getElementById('email').style.borderColor = "red";
        // document.getElementById('submit').style.backgroundColor = "red";
        document.getElementById('psswd').style.borderColor = "#ccc";
        // document.getElementById('message').style.backgroundColor = "#f6bebe";

    }else if (passwd=='') {
        // mensage.innerHTML='<p style="color:red">El campo password esta vacio</p>';
        mensage.innerHTML='<p style=" border-radius: 4px; padding: 14px 20px; color:black;">Inténtalo de nuevo.</p>';
        document.getElementById('psswd').style.borderColor = "red";
        // document.getElementById('submit').style.backgroundColor = "red";
        document.getElementById('email').style.borderColor = "#ccc";
        // document.getElementById('message').style.backgroundColor = "#f6bebe";
    }
    else {
        return true;
    }
    // El false es para parar la ejecución del codigo
    return false;

}