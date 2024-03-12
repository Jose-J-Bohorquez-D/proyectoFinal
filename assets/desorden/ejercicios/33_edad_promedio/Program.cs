int i,edad,promedio,cantidad,total=0;
Console.WriteLine("Programa para calcular la edad promedio de un grupo");
Console.WriteLine("Ingrese la cantidad de alumnos");
cantidad=int.Parse(Console.ReadLine());

for(i=1;i<=cantidad;i++)
{
    Console.WriteLine("ingrese la edad del estudiante"+i);
    edad=int.Parse(Console.ReadLine());

    total=total+edad;
}

promedio=total/cantidad;
Console.WriteLine("La sume de las edades totales es"+total+" y el promdio de edad es"+promedio);
