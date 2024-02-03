namespace MyfirstApplication
{
	class MyProgram
	{
		static void Main(string[] args)
		{
			MyInteger myInteger = new MyInteger();
            Console.WriteLine(myInteger.a + myInteger.b);

			MyDouble myDouble = new MyDouble();
			Console.WriteLine(myDouble.c + myDouble.d);

			Console.WriteLine("Hellow Russia");
        }
	}
	class MyInteger
	{
		public int a = 1;
		public int b = 2;
	}
}
