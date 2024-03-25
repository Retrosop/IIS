class Point3D
{
	public double x = 0;
	public double y = 0;
	public double z = 0;

	public double getDistanseFromPoint()
	{
		
		return Math.Sqrt(x*x + y*y + z*z);
	}
	public double getDistanseFromPOint(double xx, double zz, double yy)
	{

		return Math.Sqrt((x-xx) * (x-xx) + (y-yy) * (y-yy) + (z-zz) * (z-zz));
	}
	public void getInfoPoint()
	{
        Console.WriteLine($"Информация о точке: {x} {y} {z}");
    }
}

class MyProgram
{
	static void Main()
	{
		//Console.WriteLine("HW");
		Point3D point = new Point3D();
		point.x = -1;
		point.y = 8;
		point.z = 2;

        Console.WriteLine($"Расстояние от центра: {point.getDistanseFromPoint()}");
		Console.WriteLine($"Расстояние от точки: {point.getDistanseFromPOint(9,9,9)}");
		point.getInfoPoint();




	}
}