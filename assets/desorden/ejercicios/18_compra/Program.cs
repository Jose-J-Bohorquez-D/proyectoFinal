// See https://aka.ms/new-console-template for more information
int A,B,subt,total,desc=20;
Console.WriteLine("programa para calcular el valor total de una compra");
Console.WriteLine("ingrese la cantidad de articulos comprados de la misma referencia");
A=int.Parse(Console.ReadLine());
Console.WriteLine("Ingrese el valor unitario de estos productos");
B=int.Parse(Console.ReadLine());
subt=A*B;
Console.WriteLine("El subtotal de la compra."+A+"*"+B+"es.."+subt);
if(subt>100000)
{
total=subt-((subt*desc)/100);
Console.WriteLine("El valor total a pagar con 20% de descuento es"+total);
}
else
{
    Console.WriteLine("el valor total de su compra es.."+subt);
}




