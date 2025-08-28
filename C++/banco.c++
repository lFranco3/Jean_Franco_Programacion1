#include <iostream>
#include <string>

class CuentaBancaria {
private:
    std::string numero_de_cuenta 
    std::string nombre_del_titular
    double saldo;

public:
   
    CuentaBancaria(double saldoInicial) {
        if (saldoInicial >= 0) {
            saldo = saldoInicial;
        } else {
            saldo = 0;
        }
    }
    
    void mostrarInfo() {
        std::cout << "Numero de cuenta: " << numero_de_cuenta << ", Nombre del titular: " << nombre_del_titular << ", Saldo: " << saldo << std::endl;
    }
    
    double getSaldo() {
        return saldo;
    }

    /
    void depositar(double monto) {
        if (monto > 0) {
            saldo += monto;
        }
    }
    
    
    bool retirar(double monto) {
        if (monto > 0 && saldo >= monto) {
            saldo -= monto;
            return true; 
        }
        return false; 
    }
};

int main() {
    CuentaBancaria miCuenta(1000.0);

    miCuentaBancaria.numero_de_cuenta = "0851672856182061"
    miCuentaBancaria.nombre_del_titular = "Juan Perez Membrillo"

    miCuenta.depositar(500.0);
    std::cout << "Saldo actual: $" << miCuenta.getSaldo() << std::endl;

    miCuenta.retirar(200.0);
    std::cout << "Saldo después del retiro: $" << miCuenta.getSaldo() << std::endl; 

    miCuenta.mostrarInfo();



    return 0;
}
