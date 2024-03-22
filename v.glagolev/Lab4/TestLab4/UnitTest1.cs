using Lab4;

namespace TestLab4
{
	[TestClass]
	public class UnitTest1
	{
		[TestMethod]
		public void TestMethod1()
		{
			Assert.AreEqual(Person.Sum(6, 8), 14);
			Assert.AreEqual(Person.Sum(2, 4), 6);
			Assert.AreEqual(Person.Sum(3, 8), 11);

		}
	}
}