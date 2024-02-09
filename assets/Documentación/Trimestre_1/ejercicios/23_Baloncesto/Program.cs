// See https://aka.ms/new-console-template for more information
int estatura,peso,edad;
Console.WriteLine("Programa de ingreso el equipo de baloncesto");
Console.WriteLine("Ingrese la edad del deportista");
edad=int.Parse(Console.ReadLine());
Console.WriteLine("Ingrese la estatura del deportista");
estatura=int.Parse(Console.ReadLine());
Console.WriteLine("Ingrese el peso del deportista");
peso=int.Parse(Console.ReadLine());
if((edad<=18) && (estatura>180) && (peso<=80))
{
    Console.WriteLine("El deportista es aceeptado en el equipo de baloncesto.");
}
else
Console.WriteLine("El deportista no es aceptado en el equipo de baloncesto");