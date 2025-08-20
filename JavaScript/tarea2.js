const nombre = "Tablet 10 pulgadas"
let precio = 450.99
let stock = 25
const enviogratis = true
let cantidad = 2

let subtotal = precio * cantidad
let impuesto = precio * 0.07
let preciototal = subtotal + impuesto
console.log(`Subtotal = ${subtotal}, total = ${preciototal.toFixed(2)}`)   