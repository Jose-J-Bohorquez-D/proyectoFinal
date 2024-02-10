// See https://aka.ms/new-console-template for more information
int A,C,J,D;
Console.WriteLine("--Programa para calcular el 30% - 60% -90% de cualquier numero de entrada--");
Console.WriteLine("-- escoja el porcentaje que desea utilizar, sin signo--");
A=int.Parse(Console.ReadLine());
Console.WriteLine("Escoja el numero al cual dese sacar el porcentaje");
D=int.Parse(Console.ReadLine());
J=D*A/100;
C=J;
Console.WriteLine("El "+A+"% de "+D+" es igual a "+C);