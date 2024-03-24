namespace Myprogram
{
	public class Shar
	{
		private double radius = 0;

		public double Radius
		{
			get
			{
				return radius;
			}
			set
			{
				if (value < 0)
				{
					Console.WriteLine("Радиус не должен быть отрицательным");
				} else
				{
					radius = value;
				}
				
			}
		}


		const double pi = 3.14;

		public Shar()
		{
		}

		/// <summary>
		/// Расчет объема шара
		/// </summary>
		/// <returns></returns>
		public double getObiem()
		{
			return (4 / 3) * radius * radius * pi;
		}
		/// <summary>
		/// Определение диаметра шара
		/// </summary>
		/// <returns></returns>
		public double getDiametr() => 2 * radius;

		/// <summary>
		/// Определение площади шара
		/// </summary>
		/// <returns></returns>
		public double getPloshad() => 4 * radius * radius * pi * 0.3;
	}
}