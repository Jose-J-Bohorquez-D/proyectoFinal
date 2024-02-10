int i,cantidad=4;
double promedio,notas,total=0;
Console.WriteLine("materia de Programación De Software");

for(i=1;i<=cantidad;i++)
{
    Console.WriteLine("Ingrese la calificacion "+i);
    notas=double.Parse(Console.ReadLine());
    total=total+notas;
}

    promedio=total/cantidad;

    Console.WriteLine("La nota promedio de la materia de programacion de software es: \n"+promedio);

    if (promedio>=4.0)

    {
        Console.WriteLine( "El estudiante pasa la materia");

    }
    else
    {
        Console.WriteLine(" El estudiante no logra pasar la materia");
    }
