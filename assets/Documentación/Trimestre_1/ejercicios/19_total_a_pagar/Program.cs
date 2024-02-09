// See https://aka.ms/new-console-template for more information
int A,B,Subt,Total;
int DescuentoA=15;
int DescuentoB=35;
Console.WriteLine("Programa para determinar el valor de una compra");
Console.WriteLine("Ingrese la cantidad de productos de la misma referencia..");
A=int.Parse(Console.ReadLine());
Console.WriteLine("Ingrese el valor unitario del producto..");
B=int.Parse(Console.ReadLine());
Subt=A*B;
Console.WriteLine("el valor subtotal de la compra   "+A+" * "+B+" es "+Subt);
if(Subt<20000)
{
    DescuentoA=(Subt*15)/100;
    Total=Subt-DescuentoA;
    Console.WriteLine("el valor total de la compra con 15% de descuento es.."+Total);
}


