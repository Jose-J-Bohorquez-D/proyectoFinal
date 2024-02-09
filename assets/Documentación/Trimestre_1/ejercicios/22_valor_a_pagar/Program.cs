// See https://aka.ms/new-console-template for more information
int A,B,C,D,E;
Console.WriteLine("programa para calcular el valor total a pagar");
Console.WriteLine("Ingrese el valor del primer producto");
A=int.Parse(Console.ReadLine());
Console.WriteLine("Ingrese el valor del segundo producto");
B=int.Parse(Console.ReadLine());
Console.WriteLine("Ingrese el valor del tercer producto");
C=int.Parse(Console.ReadLine());
D=A+B+C;
if((D>=10000) && (D<=20000))
{
    E=D-(D*10/100);
    Console.WriteLine("el valor de su compra es. "+D+"  y con el descuento de 10% debe pagar"+E);
}
else
if ((D>20000) && (D<=50000))
{
    E=D-(D*30/100);
    Console.WriteLine("el valor de su compra es. "+D+"  y con el descuento de 30% debe pagar"+E);
}
else
if(D>50000)
{
    E=D-(D*50/100);
    Console.WriteLine("el valor de su compra es. "+D+"  y con el descuento de 50% debe pagar"+E);
}