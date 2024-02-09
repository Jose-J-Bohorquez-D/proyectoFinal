// See https://aka.ms/new-console-template for more information
float lunes,martes,miercoles,jueves,viernes,sabado,domingo;
float temperatura;
Console.WriteLine("Programa para definir la temperatura");
Console.WriteLine("Ingrese la temperatura del lunes");
lunes=float.Parse(Console.ReadLine());
Console.WriteLine("Ingrese la temperatura del martes");
martes=float.Parse(Console.ReadLine());
Console.WriteLine("Ingrese la temperatura del miercoles");
miercoles=float.Parse(Console.ReadLine());
Console.WriteLine("Ingrese la temperatura del jueves");
jueves=float.Parse(Console.ReadLine());
Console.WriteLine("Ingrese la temperatura del viernes");
viernes=float.Parse(Console.ReadLine());
Console.WriteLine("Ingrese la temperatura del sabado");
sabado=float.Parse(Console.ReadLine());
Console.WriteLine("Ingrese la temperatura del domingo");
domingo=float.Parse(Console.ReadLine());
temperatura=(lunes+martes+miercoles+jueves+viernes+sabado+domingo)/7;
Console.WriteLine(" El promedio de temperatura de la semana es ...."+temperatura);
if(temperatura>35)
{
Console.WriteLine(" que semana tan calurosa ");
}
else
if((temperatura>15) && (temperatura<=35))
{
  Console.WriteLine(" que cliuma tan delicioso ");  
}
else
if(temperatura<15)
{
Console.WriteLine(" que semana tan frio ");
}

