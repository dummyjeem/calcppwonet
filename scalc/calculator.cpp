#include <iostream>

using namespace std;

int main()
{
    char math;
    int a, b;
    float hasil;

    cout << "Kalkulator Simpel\n\n";
    cout << "Pilih Operasi -, +, *, /: ";
    cin >> math;
    switch (math)
    {
    case '-':
        break;
    case '+':
        break;
    case '*':
        break;
    case '/':
        break;
    default:
        cout << "Input Salah" << endl;
        abort();
    }
    cout << "Masukan Nilai Pertama: ";
    cin >> a;
    cout << "Masukan Nilai Kedua: ";
    cin >> b;
    cout << "Hasil Dari ";
    cout << a << math << b;

    if (math == '-')
    {
        hasil = (a - b);
        cout << " = " << hasil;
    }
    else if (math == '+')
    {
        hasil = (a + b);
        cout << " = " << hasil;
    }
    else if (math == '*')
    {
        hasil = (a * b);
        cout << " = " << hasil;
    }
    else if (math == '/')
    {
        hasil = (a / b);
        cout << " = " << hasil;
    }

    cout << endl;

    cin.get();
    return 0;
}
