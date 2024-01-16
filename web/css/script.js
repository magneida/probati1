function cacher()
{    const form = document.getElementById("form").Value;
     const pass = document.getElementById("pass").Value;
     const passe = document.getElementById("passe").Value;
    

    form.addEventListener('submit',e =>{

       e.preventDefaut();

       validationInputs();

    });

      const setError = (Element, Message) =>{

        const inputControl= Element.parentElement;
        const errorDisplay = inputControl.querySelecor('.r')
         errorDisplay.innerText = Message
        const inputControl.classlist.add('error');
        const inputControl.classlist.remove('succes');
        

      }
      
    const validationInputs = () =>{
           const passValue= pass.Value.trim();
           const passeValue= passe.Value.trim();

    };
}