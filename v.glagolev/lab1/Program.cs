namespace LR_One
{
	class Program
	{
		static void Main(string[] args)
		{
			int a;
			int b = 7;
			string str = "Hello? World !!!";
			a = 123;

            Console.WriteLine("Значение переменной а равно {0}", a);
			Console.WriteLine("Значение переменной а равно {0}", b);
			Console.WriteLine("Значение а+b = {0} + {1} = {2}", a,b,a+b);
            Console.WriteLine(str);

			double g = 1;
			double h = 2;
			double d = 3;

			double x = (g * h / d * 17) + (d * 17 / h) - (g + d * 17 + h) / 4;
			Console.WriteLine("Значение числа x = " + x.ToString());
			
 			Console.ReadKey();

        }
	}
}