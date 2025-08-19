#jean

def suma(a,b):
    suma = a + b
    return suma

def resta(a,b):
    resta = a - b
    return resta

def mult(a,b):
    mult = a * b
    return mult

def division(a,b):
    division = a + b
    return division

while True:
    print("ingrese 1. para sumar")
    print("ingrese 2. para restar")
    print("ingrese 3. para multiplicar")
    print("ingrese 4. para dividir")
    print("ingrese 5. para salir")
    opcion = int(input("escoga una opcion: "))
    if opcion == 1:
        variable1 = float(input("Ingrese primer valor"))
        variable2 = float(input("Ingrese el segundo valor"))
        resultado = suma(variable1, variable2)
        print (f"el resultado de la suma es:{resultado}")
    elif opcion == 2:
        variable1 = float(input("Ingrese primer valor"))
        variable2 = float(input("Ingrese el segundo valor"))
        resultado = resta(variable1, variable2)
        print (f"el resultado de la resta es:{resultado}")
    elif opcion == 3:
        variable1 = float(input("Ingrese primer valor"))
        variable2 = float(input("Ingrese el segundo valor"))
        resultado = mult(variable1, variable2)
        print (f"el resultado de la multiplicacion es:{resultado}")
    elif opcion == 4:
        variable1 = float(input("Ingrese primer valor"))
        variable2 = float(input("Ingrese el segundo valor"))
        resultado = division(variable1, variable2)
        print (f"el resultado de la division es:{resultado}")
    elif opcion == 5:
        print("saliendo del programa")
        break
    else:
        print("opcion no valida")
