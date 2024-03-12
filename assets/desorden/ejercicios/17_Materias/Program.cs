// See https://aka.ms/new-console-template for more information
int Codigo;
string Nombre,Materia;
float A,B,C,Nota;
Console.WriteLine("Programa para calcular la nota definitiva de un estudiante");
Console.WriteLine("Ingrese el codigo del estudiante");
Codigo=int.Parse(Console.ReadLine());
Console.WriteLine("Ingrese el nombre del estudiante");
Nombre=Console.ReadLine();
Console.WriteLine("Ingrese la materia a calificar");
Materia=Console.ReadLine();
Console.WriteLine("Ingrese la Primera nota para el estudiante");
A=float.Parse(Console.ReadLine());
Console.WriteLine("Ingrese la segunda nota para el estudiante");
B=float.Parse(Console.ReadLine());
Console.WriteLine("Ingrese la tercera nota para el estudiante");
C=float.Parse(Console.ReadLine());
Nota=(A+B+C)/3;
Console.WriteLine("la nota final del estudiante.."+Codigo+"..con nombre.."+Nombre+"..es la siguiente");
Console.WriteLine("el promedio de sus notas.."+A+".."+B+".."+C+".. es.."+Nota);
if(Nota<4.0)
{
    Console.WriteLine("el estudiante no aprueba la materia");
}
else
{
    Console.WriteLine("El estudiante aprueba satisfactoriamente la materia");
}
