// See https://aka.ms/new-console-template for more information
int A;
Console.WriteLine("Programa paravalidar numero positivo o negativo");
Console.WriteLine("ingrese el valor a consultar");
A=int.Parse(Console.ReadLine());
if(A<0)
{
    Console.WriteLine("  El numero ingresado..." +A+ "...es negativo");
}
else
{
    Console.WriteLine(" El numero ingresado..." +A+ "...es positivo");
}
