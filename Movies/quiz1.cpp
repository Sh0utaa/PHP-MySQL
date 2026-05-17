#include <iostream>
#include <string>
using namespace std;

class StudentTask1 {
    public:
        string name;
        int age;

        StudentTask1(string n, int a) {
            name = n;
            age = a;
        }

        void display() {
            cout << "Name: " << name << ", Age: " << age << endl;
        }
};

class Person {
    public:
        string name;

        Person(string n) {
            name = n;
        }

        virtual void show() {
            cout << "Name: " << name << endl;
        }
};

class StudentTask2 : public Person {
    public:
        int grade;

        StudentTask2(string n, int g) : Person(n) {
            grade = g;
        }

        void show() override {
            cout << "Name: " << name << ", Grade: " << grade << endl;
        }
};

class Employee {
    private:
        double salary;      

    protected:
        string name;        

    public:
        Employee(string n, double s) {
            name = n;
            salary = s;
        }

        void showInfo() {
            cout << "Name: " << name << endl;
        }
};

struct StudentStruct {
    string name;
    int age;
};

int main() {

    cout << "=== ამოცანა 1 ===" << endl;
    StudentTask1 s1("Giorgi", 20);
    s1.display();

    cout << endl;

    cout << "=== ამოცანა 2 ===" << endl;
    StudentTask2 s2("Nino", 95);
    s2.show();

    cout << endl;

    cout << "=== ამოცანა 3A ===" << endl;
    Employee e1("Luka", 2500.0);
    e1.showInfo();

    cout << endl;

    cout << "=== ამოცანა 3B ===" << endl;
    StudentStruct st1;
    st1.name = "Mariam";
    st1.age = 19;
    cout << "Name: " << st1.name << ", Age: " << st1.age << endl;

    return 0;
}