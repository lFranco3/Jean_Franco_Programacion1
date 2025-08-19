#Jean Franco
print ("¡Preparate para Jugar!")
print ("Te encuentras en el bosque acampando y de repente escuchas un ruido extraño")
opcion = input ("Quieres INVESTIGAR o IGNORAR?:")

if opcion.upper == "INVESTIGAR": #primera accion1
    print("Al investigar descubres una ardilla en un arbusto")

elif opcion.upper == "IGNORAR": #Primera accion2
    print("Decides continuar acampando")  
else:
    print("Error: escoge una opcion valida")  
