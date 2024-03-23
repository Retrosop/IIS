class Group
{
	public string name;
	public DateTime dateg;
	public int countGroupOnStart = 0;
	public int countGroupOnStudy = 0;

	public Group()
	{
	}
	public Group(string n)
	{
		this.name = n;
	}
	public override string? ToString()
	{
		if (string.IsNullOrEmpty(name))
		{
			return base.ToString();
		};
		return $"Наша группа {this.name} в составе {this.countGroupOnStart} человек образована {this.dateg.ToString()}";
	}
}

class SchoolClass
{
	string name;
    public SchoolClass(string n)
    {
		this.name = n;	
    }
}
class MyProgram
{
	static void Main()
	{
		Group gr1 = new Group("1721");
		gr1.dateg = new DateTime(2022, 9, 2);
		gr1.countGroupOnStart = 18;
        Console.WriteLine(gr1.ToString()); //Group
		Console.WriteLine(gr1.GetHashCode()); //Group

		SchoolClass gr3 = new SchoolClass("7B");

		Group gr2 = new Group();
        Console.WriteLine("=====");
        Console.WriteLine(gr2.ToString()); //Group

		if (gr3.GetType() != typeof(SchoolClass)){
			gr3.ToString();
		}

		List<Object> vuz = new List<Object>();
		vuz.Add(gr1);
		vuz.Add(gr2);
		vuz.Add(gr3);

		foreach (var xvuz in vuz)
		{
            Console.WriteLine("Результат");
            if (xvuz.GetType() != typeof(SchoolClass))
			{
				Console.WriteLine(xvuz.ToString());
			}
		}


	}
}