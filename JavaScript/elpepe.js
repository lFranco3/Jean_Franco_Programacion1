let nombre = "Jean"
let edad = 19
let Javascrip = "javascrip"

console.log("Hola me llamo", nombre)
console.log("Tengo", edad, "y estoy viendo", Javascrip)
let opcion = Number(prompt("Ingresa la opcion: 1. Suma \n 2. Restar\n 3.Multiplicar\n 4.Dividir\n 5.Modulo\n 6.Exponenviacion\n"))
let a = Number(prompt("Ingresa el primer numero a calcular: "));
let b = Number(prompt("Ingresa el segundo numero a calcular: "));
let suma = a + b;
let resta = a - b; 
let multiplicacion = a * b; 
let division = a / b; 
let modulo = a % b; 
let exponenciacion = a ** b;
console.log(`Suma: ${suma}`);
console.log(`Resta: ${resta}`);
console.log(`Multiplicación: ${multiplicacion}`);
console.log(`División: ${division}`);
console.log(`Módulo: ${modulo}`);   
console.log(`Exponenciación: ${exponenciacion}`);

if (opcion == 1) {
    let suma = a + b;
    console.log(`Suma: ${suma}`);
}
else if (opcion == 2) {
    let resta = a - b;
    console.log(`Resta: ${resta}`);
}
else if (opcion == 3) {
    let Multiplicacion = a * b;
    console.log(`Multiplicacion: ${Multiplicacion}`);
}
else if (opcion == 4) {
    let division = a / b; 
    console.log(`División: ${division}`);
}
else if (opcion == 5) {
    let modulo = a % b; 
    console.log(`Módulo: ${modulo}`);   
}
else if (opcion == 6) {
    let exponenciacion = a ** b;
    console.log(`Exponenciación: ${exponenciacion}`);  
}
else {
    console.log(`Error: Ingrese un numero valido`);  
}

switch (opcion) {
    case 1:
        let suma = a + b;
        console.log(`Suma: ${suma}`);
        break;
    case 2:
        let resta = a - b;
        console.log(`Resta: ${resta}`);
        break;
    case 3:
        let Multiplicacion = a * b;
        console.log(`Multiplicacion: ${Multiplicacion}`);
        break;
    case 4:
        let division = a / b; 
        console.log(`División: ${division}`);
        break;
    case 5:
        let modulo = a % b; 
        console.log(`Módulo: ${modulo}`);
        break;
    case 6:
        let exponenciacion = a ** b;
        console.log(`Exponenciación: ${exponenciacion}`);
        break; 
    default:
        console.log(`Error: Ingrese un numero valido`);
        break;
}