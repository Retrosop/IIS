using Myprogram;

namespace Unittest
{
	[TestClass]
	public class UnitTest1
	{
		[TestMethod]
		public void TestPloshad()
		{
			Shar myshar = new Shar();
			myshar.Radius = 0;
			Assert.AreEqual(0, myshar.getPloshad());
			myshar.Radius = -1;
			Assert.AreEqual(0, myshar.getPloshad());
			myshar.Radius = 12;
			Assert.AreEqual(1808.64, myshar.getPloshad());
			myshar.Radius = 14;
			Assert.AreEqual(2461, 76, myshar.getPloshad());
		}

		[TestMethod]
		public void TestObiem()
		{
			Shar myshar = new Shar();
			myshar.Radius = 0;
			Assert.AreEqual(0, myshar.getObiem());
			myshar.Radius = -1;
			Assert.AreEqual(0, myshar.getObiem());
			myshar.Radius = 12;
			Assert.AreEqual(452, 16, myshar.getObiem());
			myshar.Radius = 14;
			Assert.AreEqual(615, 44, myshar.getObiem());
		}
	}
}