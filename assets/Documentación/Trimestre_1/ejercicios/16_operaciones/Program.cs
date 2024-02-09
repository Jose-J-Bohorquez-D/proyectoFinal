// See https://aka.ms/new-console-template for more information
int A,B,C,D;
Console.WriteLine("Programa de operaciones con 2 valores");
Console.WriteLine("Ingrese el primer valor");
A=int.Parse(Console.ReadLine());
Console.WriteLine("Iingrese el segundo valor");
B=int.Parse(Console.ReadLine());
if(A==B)
{
    C=A-B;
    Console.WriteLine("Como los valores"+A+"y"+B+"son iguales el resultado de resta es.."+C);
}
else
if(A!=B)
{
    D=A+B;
    Console.WriteLine("Como los valores"+A+"y"+B+"son diferentes el valor de su suma es.."+D);
}
