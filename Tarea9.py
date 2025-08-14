#jean
value = float(input("Ingrese monto total a pagar: "))

if value <= 100:
    value = value * 0.90
    print(f"el monto total a pagar es {value} con un 10% de descuento ya aplicado")
elif value >= 101:
    value = value * 0.80
    print(f"el monto total a pagar es {value} con un 20% de descuento ya aplicado")
else:
    print("Error: ingrese un monto valido")