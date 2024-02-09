// See https://aka.ms/new-console-template for more information
float A,B;
Console.WriteLine("--Programa para verificar la mitad de un numero");
Console.WriteLine("-- Ingrese el valor que desea consultar");
A=float.Parse(Console.ReadLine());
B=A/2;
Console.WriteLine("La mitad del numero ingresado es..."+B);
if(B<100)
{
    Console.WriteLine("La mitad del numero ingresado es menor a 100");
}
else
{
    Console.WriteLine("La mitad del numero ingresado es mayor a 100");
}

