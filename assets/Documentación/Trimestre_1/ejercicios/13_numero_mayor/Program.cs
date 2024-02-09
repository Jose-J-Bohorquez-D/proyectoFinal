// See https://aka.ms/new-console-template for more information
int A,B;
Console.WriteLine("Programa para determinar cual es el numero mayor");
Console.WriteLine(" Ingrese el primer valor...");
A=int.Parse(Console.ReadLine());
Console.WriteLine("Ingrese el segundo valor");
B=int.Parse(Console.ReadLine());
if(A>B)
{
    Console.WriteLine("el primer valor."+A+".es mayor");
}
else
Console.WriteLine("el  segundo valor."+B+".es mayor");



