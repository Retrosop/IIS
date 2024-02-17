class Program
{
	static void Main(string[] args)
	{
        Console.WriteLine("Hello World");
		Person tom1 = new Person();
		tom1.Print();
		Person tom2 = new Person("Tom");
		tom2.Print();
		Person tom3 = new Person("Tom", 30);
		tom3.Print();

		Person2 tom4 = new Person2("Tom");
		tom4.Print();

		decimal a = 3.2m;
    }
}
struct Person
{
	public string name;
	public int age;

	public Person() : this("Tom")
	{

	}
	public Person(string name): this(name, 1)
	{
	}

	public Person(string name, int age)
	{
		this.name = name;
		this.age = age;
	}
	public void Print() => Console.WriteLine($"Имя {name} Возраст: {age}");
}

struct Person2 (string name)
{
	public string name2 => name + "test";
	public void Print() => Console.WriteLine($"Имя {name2}");
}
