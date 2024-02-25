namespace MyProject;

class Person
{
	public string name = "Undefined";
	public int age;
	public Company company;

	public Person() 
	{
        name = "Неизвестно";
		age = 20;
		company = new Company();
    }
	public Person(string name) : this(name, 20, "Камаз")
	{
	}
	public Person(string n, int a, string c)
	{
		this.name = n;
		this.age = a;
		this.company = new Company(c);
	}

	public void Deconstruct(out string personName,out int personAge, out string personCompany)
	{
		personName = name;
		personAge = age;
		personCompany = company.title;
	}

	public void Print() => Console.WriteLine($"Имя {name} Возраст {age}");
}
