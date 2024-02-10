// See https://aka.ms/new-console-template for more information
int A,B,C,D=10,E=15,F,G,H,I;
Console.WriteLine("Programa que permite calcular el salario de un empleado");
Console.WriteLine("Digite el salario diario del empleado");
A=int.Parse(Console.ReadLine());
Console.WriteLine("Digite el numero de dias");
B=int.Parse(Console.ReadLine());
C=A*B;
F=C*D/100;
G=C-F;
H=G*E/100;
I=H-G;
Console.WriteLine("El salario del empleado debe ser "+I);

