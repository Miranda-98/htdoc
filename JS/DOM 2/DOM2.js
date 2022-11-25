// EJERCICIO 1
function añadirParrafoFinal(divID, parrafo) {
    //div donde voy a añadir cosas
    let añadir = document.getElementById(divID);

    //elemento que voy a añadir
    let nuevoParrafo = document.createElement(parrafo);

    //texto que voy a añadir
    let negrita = document.createElement('strong');
    let negritaTexto = document.createTextNode('añadido');
    negrita.appendChild(negritaTexto);
    let valorParrafo1 = document.createTextNode("Nuevo parrafo ");
    let valorParrafo3 = document.createTextNode(" por javascript");

    //añadir elementos
    nuevoParrafo.appendChild(valorParrafo1);
    nuevoParrafo.appendChild(negrita);
    nuevoParrafo.appendChild(valorParrafo3);
    añadir.appendChild(nuevoParrafo);

}



// EJERCICIO 2
function añadirParrafoPosicion(divID, parrafo, posicion) {
    //div donde voy a añadir cosas
    let añadir = document.getElementById(divID);

    //elemento que voy a añadir
    let nuevoParrafo = document.createElement(parrafo);

    //texto que voy a añadir
    let negrita = document.createElement('strong');
    let negritaTexto = document.createTextNode('nuevo');
    negrita.appendChild(negritaTexto);
    let valorParrafo1 = document.createTextNode("Este es el ");
    let valorParrafo3 = document.createTextNode(" segundo párrafo");

    //añadir elementos
    nuevoParrafo.appendChild(valorParrafo1);
    nuevoParrafo.appendChild(negrita);
    nuevoParrafo.appendChild(valorParrafo3);
    añadir.appendChild(nuevoParrafo);

    //posicion donde se añade
    let segundoParrafo = añadir.children[posicion];
    añadir.insertBefore(nuevoParrafo, segundoParrafo);
}

// EJERCICIO 3
function añadirFormulario() {
    // let elemento3 = document.createElement("label");
    // let input = document.createElement("input");
     
    // let texto = document.createTextNode("Dato 1 bis");
    // elemento3.appendChild(texto);
     
    //       input.setAttribute("id", "input1bis");
    //       input.setAttribute("type", "text");
    //       input.setAttribute("size", "20");
    //       input.setAttribute("value", "Ricardo");
     
    // elemento3.appendChild(input);
    // elemento3.appendChild(document.createElement("br"));
     
    // let form = document.forms[0];
    // form.insertBefore(elemento3, form.querySelector("label").nextSibling);
    let label = document.createElement('label');
    let input = document.createElement('input');
    let formulario = document.forms[0];

    let texto = document.createTextNode('Dato 1 bis');
    label.appendChild(texto);

    input.setAttribute('id', 'input1bis');
    input.setAttribute('type', 'text');
    input.setAttribute('size', '24');
    input.setAttribute('value', 'Gerar');

    label.appendChild(input);
    label.appendChild(document.createElement('br'));
    
    formulario.insertBefore(label, formulario.querySelector('label').nextSibling);
}

// EJERCICIO 4
function nuevoSexo(){
    let input = document.createElement('input');
    let añadir = document.getElementById('label > input');
    let texto = document.createTextNode('Otro');
    

    input.setAttribute('type', 'radio');
    input.setAttribute('name', 'sexo');
    input.setAttribute('value', 'Otro');
    input.appendChild(texto);

    añadir.appendChild(input);


}


añadirParrafoFinal('lipsum', 'p');
añadirParrafoPosicion('lipsum', 'p', 2);
añadirFormulario();
nuevoSexo();
