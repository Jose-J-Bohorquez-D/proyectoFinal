// See https://aka.ms/new-console-template for more information
int X,T,V;
Console.WriteLine("programa que permite calcular la distacia recorrida en un movimiento rectilineo");
Console.WriteLine("Digite la velocidad");
V=int.Parse(Console.ReadLine());
Console.WriteLine("Digite el tiempo");
T=int.Parse(Console.ReadLine());
X=V*T;
Console.WriteLine("la distancia es "+V+"*"+T+"="+X);

