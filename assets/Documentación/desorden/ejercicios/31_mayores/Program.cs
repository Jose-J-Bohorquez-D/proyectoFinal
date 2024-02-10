int cantidad,edad,i,Mayores=0,Menores=0;

Console.WriteLine("Por favor digite la cantidad de estudiantes ");
cantidad=int.Parse(Console.ReadLine());

for(i=1;i<=cantidad;i++)
{
 Console.WriteLine("Por favor digite la edad de el  estudiante "+i);
edad=int.Parse(Console.ReadLine());

if(edad>=18)
{
  Mayores=Mayores+1;

}
else
Menores=Menores+1;

}

Console.WriteLine("La cantidad de estudiantes mayores es: "+Mayores+" La cantidad de estudiantes menores es:"+Menores);