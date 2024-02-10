namespace MyProject;
class Program
{
	static void Main(string[] args)
	{
		Person student = new Person();
		student.Print();

		student = new Person("Владимир");
		student.Print();

		student = new Person("Владимир", 21, "Камаз");
		student.Print();

		(string name, int age, string nameCompany) = student;

		Console.WriteLine($"Имя {name}");
	}

}

