#include <iostream>
#include <string>
using namespace std;

class Book {
public:
    string title;
    double price;

    Book(string t, double p) {
        title = t;
        price = p;
    }

    void printInfo() {
        cout << "Title: " << title << ", Price: " << price << endl;
    }
};

class Vehicle {
public:
    string brand;

    Vehicle(string b) {
        brand = b;
    }

    virtual void show() {
        cout << "Brand: " << brand << endl;
    }
};

class Car : public Vehicle {
public:
    int year;

    Car(string b, int y) : Vehicle(b) {
        year = y;
    }

    void show() override {
        cout << "Brand: " << brand << ", Year: " << year << endl;
    }
};

class Account {
private:
    double balance;     

protected:
    string owner;       

public:
    Account(string o, double b) {
        owner = o;
        balance = b;
    }

    void showOwner() {
        cout << "Owner: " << owner << endl;
    }
};

struct CarStruct {
    string brand;
    int year;
};

int main() {

    cout << "=== ამოცანა 1 ===" << endl;
    Book b1("Harry Potter", 29.99);
    b1.printInfo();

    cout << endl;

    cout << "=== ამოცანა 2 ===" << endl;
    Car c1("Toyota", 2021);
    c1.show();

    cout << endl;

    cout << "=== ამოცანა 3A ===" << endl;
    Account acc1("Giorgi", 1500.0);
    acc1.showOwner();

    cout << endl;

    cout << "=== ამოცანა 3B ===" << endl;
    CarStruct car1;
    car1.brand = "BMW";
    car1.year = 2019;
    cout << "Brand: " << car1.brand << ", Year: " << car1.year << endl;

    return 0;
}