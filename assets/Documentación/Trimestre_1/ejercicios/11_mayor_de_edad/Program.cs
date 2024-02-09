// See https://aka.ms/new-console-template for more information
int A,B=2023,C;
Console.WriteLine("--Programa que permite saber si una persona es ayor de edad");
Console.WriteLine("-Ingrese el año de nacimiento-");
A=int.Parse(Console.ReadLine());
C=B-A;
Console.WriteLine("La edad de la persona es "+C);
if (C<18)
{
    Console.WriteLine("La persona es menor de edad");
}
else
{
    Console.WriteLine("La persona es mayor de edad");
}
