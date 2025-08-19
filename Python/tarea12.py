#Jean
while True:
    numero = int(input("ingrese un numero de entre el 1 al 100: "))
    if numero == 50:
        print("acertaste al numero secreto ")
        break
    elif numero > 50 and numero <= 100:
        print("ingresastes un numero muy alto ")
    elif numero < 50 and numero >= 0:
        print("ingresastes un numero muy bajo ")
    else:
        print("Error. Numero no valido")