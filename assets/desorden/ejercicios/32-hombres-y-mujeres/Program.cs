int i,hombre=0,mujer=0,cantidad,seleccion;

Console.WriteLine("Programa que permita determinar cuantos hombres y mujeres hay en un curso");
Console.WriteLine("Ingrese la cantidad de alumnos del curso");
cantidad=int.Parse(Console.ReadLine());

for(i=1;i<=cantidad;i++)
{
   Console.WriteLine("digite 1 si es mujer o 2si es hombre"+i);
   seleccion=int.Parse(Console.ReadLine());

   if (seleccion== 1)
   {
      mujer=mujer+1;
   }
   else
   if(seleccion==2)

   {
      hombre=hombre+1;
   }
}
Console.WriteLine(" el total de hombres del curso es "+hombre+" y la cantidad de mujeres es"+mujer);