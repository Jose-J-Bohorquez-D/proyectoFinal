// See https://aka.ms/new-console-template for more information
int A,B,C,D=16,E,J;
Console.WriteLine("Programa que permite hacer varios productos con el iva");
Console.WriteLine("Ingrese el valor del producto");
A=int.Parse(Console.ReadLine());
Console.WriteLine("Digite la cantidad de productos");
B=int.Parse(Console.ReadLine());
E=A*B;
J=E*D/100;
C=J+E;
Console.WriteLine("El total de "+A+" * "+B+" +16% es ="+C);


