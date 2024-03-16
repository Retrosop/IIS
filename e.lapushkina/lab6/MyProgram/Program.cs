
namespace Myprogram
{
	class MyProgram
	{
		public static void Main()
		{
			int radius = - 14;
			Shar myshar = new Shar();
			myshar.Radius = radius;
			Console.WriteLine($"Площадь шара c радиусом {radius} равна {myshar.getPloshad()}");
			Console.WriteLine($"Диаметр шара c радиусом {radius} равна {myshar.getDiametr()}");
			Console.WriteLine($"Объем шара c радиусом {radius} равна {myshar.getObiem()}");
		}
	}
}
