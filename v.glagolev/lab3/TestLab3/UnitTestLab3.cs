namespace Lab3
{
	public class Tests
	{

		[Test]
		public void TestCalculateMyFunc()
		{   //t, N, X, Y
			Assert.AreNotEqual(Program.myFunc(0, 0, 0, 0), 1);
			Assert.AreNotEqual(Program.myFunc(0, 10, 2.34, 100), 8.2134);
		}
	}
}