// See https://aka.ms/new-console-template for more information
int A,B,C,D,E,F,G;
Console.WriteLine("--Programa que permite calcular el promedio de 5 numeros--");
Console.WriteLine("--Digite el primer valor--");
A=int.Parse(Console.ReadLine());
Console.WriteLine("--Digite el segundo valor--");
B=int.Parse(Console.ReadLine());
Console.WriteLine("--Digite el tercer valor--");
C=int.Parse(Console.ReadLine());
Console.WriteLine("--Digite el cuarto valor--");
D=int.Parse(Console.ReadLine());
Console.WriteLine("--Digite el quinto valor--");
E=int.Parse(Console.ReadLine());
F=A+B+C+D+E;
G=F/5;
Console.WriteLine(" El promedio de estos 5 numeros es "+G);
