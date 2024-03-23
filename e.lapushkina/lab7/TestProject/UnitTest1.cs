namespace TestProject
{
	[TestClass]
	public class UnitTest1
	{
		[TestMethod]
		public void TestMethod1()
		{
			Graph graph = new Graph(5, 9);
			Assert.AreEqual(graph.CalculateIntegral(), 28);
			Assert.AreNotEqual(graph.CalculateIntegral(), 25);
		}
	}
}