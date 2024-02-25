using System;
using System.IO;
namespace Lab3;
public class Program
{
	static void Main()
	{
		TextWriter save_out = Console.Out;
		TextReader save_in = Console.In;
		//var myPath = Directory.GetCurrentDirectory();
		var new_out = new StreamWriter(@"output.txt");
		var new_in = new StreamReader(@"input.txt");
		Console.SetOut(new_out);
		Console.SetIn(new_in);

		var t = Convert.ToInt32(Console.ReadLine());
		var N = Convert.ToInt32(Console.ReadLine());
		var X = Convert.ToDouble(Console.ReadLine());
		var Y = Convert.ToDouble(Console.ReadLine());
		Console.WriteLine(String.Format("{0:0.0000000}", myFunc(t,N,X,Y)));
		Console.SetOut(save_out); new_out.Close();
		Console.SetIn(save_in); new_in.Close();
	}

	public static decimal myFunc(int in_t, int in_N, double in_X, double in_Y)
	{
		double Z = 0;

		int i, step;
		double znam = 1, chisl;
		if (in_t == 0)
		{
			for (i = 1; i <= in_N; i++)
			{
				step = i * 2;
				znam *= (step - 1) * step;
				if (i % 2 == 0)
					chisl = -Math.Pow(in_Y, step);
				else
					chisl = Math.Pow(in_X, step);
				Z += (step - 1) * (step + 1) * chisl / znam;
			}
		}

		if (in_t == 1)
		{
			i = 1;
			while (i <= in_N)
			{
				step = i * 2;
				znam *= (step - 1) * step;
				if (i % 2 == 0)
					chisl = -Math.Pow(in_Y, step);
				else
					chisl = Math.Pow(in_X, step);
				Z += (step - 1) * (step + 1) * chisl / znam;
				i++;
			}
		}
		if (in_t == 2)
		{
			i = 1;
			do
			{
				step = i * 2;
				znam *= (step - 1) * step;
				if (i % 2 == 0)
					chisl = -Math.Pow(in_Y, step);
				else
					chisl = Math.Pow(in_X, step);
				Z += (step - 1) * (step + 1) * chisl / znam;
				i++;
			} while (i <= in_N);

		}
		return Convert.ToDecimal(Z);
	}
}