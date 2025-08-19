#Jean Franco
print("clasificador de numeros de positivos o negativos")
numero = float(input("Ingrese el numero a verificar: "))
if numero > 1:
    print("el numero ingresado es positivo")
elif numero == 0:
    print("el numero ingresado es cero")
else:
    print("el numero ingresado es negativo")