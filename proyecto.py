#Jean y Samuel
cesta = []
def agregar():
    nombre = input("ingrese el elemento que quieres agregar a la cesta\n")
    precio = float(input(f"ingrese el precio del producto {nombre}:\n"))
    cesta.append({"producto": nombre, "precio": precio})
    print(f"El producto{nombre} con el precio {precio} fue agregado exitosamente.\n")

def mostrar():
    if len(cesta) == 0:
        print("la cesta de productos esta vacia ¡llenala mano!.\n")
    else:
        print("contenido de la cesta\n")
        for item in cesta:
           print(f"{item['producto']} - precio {item['precio']}")

def eliminar():
    mostrar()
    producto = input("Ingrese el producto a eliminar\n")
    for item in cesta:
        if item ['producto'].lower() == producto.lower():
            cesta.remove(item)
            print(f"{producto} fue elimininado exitosamente\n")
            return
    print("No se encontro el producto, intente nuevamente\n")
    
def total():

    total = sum(item['precio'] for item in cesta)
    print(f"el total de la compra es: {total}\n1")

def mostrar_menu():
    print("CESTA DE PRODUCTOS")
    print("1. agregar nuevo producto")
    print("2. mostrar cesta de compras")
    print("3. eliminar un producto")
    print("4. calcular el total de la compra que se esta haciendo")
    print("5. Renunciar")
    

while True:
    mostrar_menu()
    opcion = input("Seleccione una opción (1-5): ")

    if opcion == '1':
        agregar()
    elif opcion == '2':
        mostrar()
    elif opcion == '3':
        eliminar()
    elif opcion == '4':
        total()
    elif opcion == '5':
        print("\nSaliendo del programa...\n")
        break 
    else:
        print("\nError: eliga una de las opciones\n")