// See https://aka.ms/new-console-template for more information
string Materia,Opc,Nombre;
float N1,N2,N3,NF;
int A,B=2023,Edad;
Console.WriteLine("Programa de edad y calificacion");
Console.WriteLine("Escoja de las siguientes opciones la que desea consultar:");
Console.WriteLine("NF para revisar la nota final del estudiante \n Edad para validar si la persona es mayor de edad");
Opc=Console.ReadLine();
switch(Opc)
{
    case "NF":
    Console.WriteLine("ingrese el nombre del estudiante");
    Nombre=Console.ReadLine();
    Console.WriteLine("Ingrese el nombre de la materia");
    Materia=Console.ReadLine();
    Console.WriteLine("Ingrese le primera nota");
    N1=float.Parse(Console.ReadLine());
    Console.WriteLine("Ingrese la segunda nota");
    N2=float.Parse(Console.ReadLine());
    Console.WriteLine("Ingrese la tercera nota");
    N3=float.Parse(Console.ReadLine());
    NF=(N1+N2+N3)/3;
    if (NF>3.0)
    {
        Console.WriteLine("La nota final del estudiante: \n Nombre: "+Nombre+". \n  Clase de:"+Materia+". \n es;"+NF);
        Console.WriteLine("El estudiante aprueba la materia");
    }
    else
    {
        Console.WriteLine("La nota final del estudiante: \n Nombre: "+Nombre+". \n  Clase de:"+Materia+". \n es;"+NF);
        Console.WriteLine("El estudiante NO aprueba la materia");
    }
    break;

    case "Edad":

    Console.WriteLine("Ingrese el nombre de la persona");
    Nombre=Console.ReadLine();
    Console.WriteLine("Ingrese el año de nacimiento");
    A=int.Parse(Console.ReadLine());
    Edad=B-A;
    if (Edad>=18)
    {
        Console.WriteLine("Respuesta: \n " +Nombre+" tiene una edad de.."+Edad+"años y es mayor de edad");
    }
    else
    Console.WriteLine("Respuesta: \n "+Nombre+" tiene una edad de.."+Edad+"años y es menor de edad");
    break;
}