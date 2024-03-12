// See https://aka.ms/new-console-template for more information
float V,T,D;
string opc;
Console.WriteLine("Programa para identificar velocidad,tiempo o distancia de un vehiculo");
Console.WriteLine("que deseas consultar: \n digite D para distancia \n digite T para tiempo \n Digite V para velocidad");
opc=Console.ReadLine();
switch(opc)
{
case "V":
Console.WriteLine("ingrese la distancia recorrida en metros");
D=float.Parse(Console.ReadLine());
Console.WriteLine("ingrese el tiempo en el cual se realizo el despazamiento en minutos");
T=float.Parse(Console.ReadLine());
V=(D/1000)/(T/60);
Console.WriteLine("El vehiculo de desplazo a una velocidad de"+V+"K/h");
break;

case "T":
Console.WriteLine("Ingrese la distancia recorrida en metros");
D=float.Parse(Console.ReadLine());
Console.WriteLine("ingrese la velocidad en la que se desplaza el vehiculo en km/h.");
V=float.Parse(Console.ReadLine());
T=(D/1000)/V;
T=T*60;
Console.WriteLine("el tiempo en el cual se realizo este recorrido es "+T+ "..minutos");
break;

case "D":
Console.WriteLine("ingrese el tiempo en el cual se realizo el despazamiento en minutos");
T=float.Parse(Console.ReadLine());
Console.WriteLine("ingrese la velocidad en la que se desplaza el vehiculo ");
V=float.Parse(Console.ReadLine());
D=V*(T/60);
D=D*1000;
Console.WriteLine("la distancia recorrida por el vehiculo es "+D+ "..metros");
break;

}

