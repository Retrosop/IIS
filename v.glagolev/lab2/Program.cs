using System;
using System.IO;
namespace Test
{

class Program
	{
		static void Main(string[] args)
		{
			TextWriter save_out = Console.Out;
			TextReader save_in = Console.In;
			var new_out = new StreamWriter(@"output.txt");
			var new_in = new StreamReader(@"input.txt");
			Console.SetOut(new_out);
			Console.SetIn(new_in);

			double a_71, _u2, test, zoo, x;
			double my_tmp, geo;
			a_71 = Convert.ToDouble(Console.ReadLine());
			_u2 = Convert.ToDouble(Console.ReadLine());
			test = Convert.ToDouble(Console.ReadLine());
			zoo = Convert.ToDouble(Console.ReadLine());
			x = Convert.ToDouble(Console.ReadLine());
			if ((x == 0) || (a_71 - zoo == 0) || (_u2 - test < 0))
				Console.WriteLine("ERROR");
			else
			{
				my_tmp = a_71 * Math.Sqrt((_u2 - test) / x) * zoo / (a_71 - zoo);
				Console.WriteLine(String.Format("{0:0.000}", my_tmp));
			}
			if (_u2 == 0)
				Console.WriteLine("ERROR");
			else
			{
				geo = Math.Sqrt(x / _u2) * a_71 * a_71 * test;
				Console.WriteLine(String.Format("{0:0.000}", geo));
			}
			Console.SetOut(save_out); new_out.Close();
			Console.SetIn(save_in); new_in.Close();
		}
	}
}