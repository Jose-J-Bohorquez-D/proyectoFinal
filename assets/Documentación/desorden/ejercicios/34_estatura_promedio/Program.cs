int i,estatura,cantidad,total=0,promedio;

Console.WriteLine("Programa que permita calcular la estatura promedio de un grupo de estudiantes");
Console.WriteLine("ingrese la cantidad de estudiantes");
cantidad=int.Parse(Console.ReadLine());

for(i=1;i<=cantidad;i++)
{
    Console.WriteLine("ingrese la estatura del estidiante: "+i);
    estatura=int.Parse(Console.ReadLine());
    total=total+estatura;

}

    promedio=total/cantidad;
    Console.WriteLine("la estatura promedio de los estudiantes es: "+promedio);

    if(promedio<140)
    {
        Console.WriteLine("son estudiantes muy bajos");

    }
    else
    if((promedio>=140) && (promedio<170))
    {
        Console.WriteLine("son estudiantes de estatura normal");
    }
    else
    if(promedio>170)
    {
        Console.WriteLine("son estudiantes muy altos");
    }


