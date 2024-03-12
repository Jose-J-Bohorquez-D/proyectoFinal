// See https://aka.ms/new-console-template for more information
int A,PN,PI;
string opc;
Console.WriteLine("Programa para validar un numero");
Console.WriteLine("Selecione la opcion que desea consultar: \n Digite PN para validar si el numero es positivo o negativo \n Digite PI para validar si el numero es par o impar");
opc=Console.ReadLine();
switch(opc)
{
    case"PN":
    Console.WriteLine("Ingrese el numero que desea consultar");
    A=int.Parse(Console.ReadLine());
    if(A>0)
    {
        Console.WriteLine("el numero digitado es positivo");
    }
    else
    Console.WriteLine("el numero digitado es negativo");
    break;

    case "PI":
    Console.WriteLine("Ingrese el numero que desea consultar");
    A=int.Parse(Console.ReadLine());
    if (A%2==0)
    {
        Console.WriteLine(" El numero ingresado es par");
    }
    else
    Console.WriteLine("El numero ingresado es impar");
    break;

}
