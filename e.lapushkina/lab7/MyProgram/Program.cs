// using System;

public class Graph
{
	private double a;
	private double b;

	public Graph(double a, double b)
	{
		this.a = a;
		this.b = b;
	}

	public double CalculateIntegral()
	{
		// Реализуйте здесь код для вычисления интеграла функции y=x от a до b
		double result = 0;
		if (a < b) 
		{
			result = (Math.Pow(b, 2) - Math.Pow(a, 2)) / 2;
		}
		return result;
	}

	public double CalculateLength()
	{
		// Реализуйте здесь код для вычисления длины отрезка функции от (a, y(a)) до (b, y(b))
		double result = 0;
		// Ваш код для вычисления длины
		if (a < b)
		{
			result = Math.Abs(b - a);
		}
		return result;
	}

	public void DisplayInfo()
	{
		Console.WriteLine($"Информация об объекте:");
		Console.WriteLine($"a = {a}");
		Console.WriteLine($"b = {b}");
		Console.WriteLine($"Интеграл функции от {a} до {b}: {CalculateIntegral()}");
		Console.WriteLine($"Длина отрезка функции от ({a}, {a}) до ({b}, {b}): {CalculateLength()}");
	}
}

class Program
{
	static void Main(string[] args)
	{
		// Пример использования класса Graph
		Console.WriteLine("Введите значения a и b:");
		double a = double.Parse(Console.ReadLine());
		double b = double.Parse(Console.ReadLine());

		Graph graph = new Graph(a, b);
		graph.DisplayInfo();

		Console.ReadLine();
	}
}