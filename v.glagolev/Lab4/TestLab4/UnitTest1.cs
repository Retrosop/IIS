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
		}
	}
}