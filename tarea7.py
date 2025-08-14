#Jean
edad = int(input("Ingrese su edad:"))
esta_en_lista = input("esta en la lista? responda con 1. si o 2. no")

if edad >= 18 and esta_en_lista == '1':
    print("Bienvenido")
elif edad >= 18 and esta_en_lista == '2':
    print("No estas en la lista")
elif edad <=17:
    print("no tienes edad suficiente para entrar a la fiesta")
else:
    print("Error, eliga una opcion valida")