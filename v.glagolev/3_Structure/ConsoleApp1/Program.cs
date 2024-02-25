using System.ComponentModel.Design;
using System.Runtime.CompilerServices;

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

		Student Max = new Student("Максим", 18);
		Max.Adress = "Shirokay 4";
		Max.Age = 121;
		Max.setPassport("1234567890");
        Console.WriteLine(Max.getPassport() + " " + Max.Adress);
		Console.WriteLine(Max.FioAdress);

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
class Student
{
	public string name;
	protected int age;
	private string? passport;
	public string adress;
	public string fioAdress;

	public required string FioAdress
	{
		set
		{

		}
		get =>	fioAdress = $"{this.name} {this.adress}";			
	}

	public string Adress
	{
		get
		{
			return adress;
		}
		set
		{
			adress = value;
		}
	}

	public int Age
	{
		set
		{
			if ((value < 1) || (value > 120))
			{
				Console.WriteLine("Ошибка возраст не верен");
			} else {
				age = value;
			}

		}
		get { 
			return age;
		}
	}

	public Student(string n, int a)
	{
		this.name = n;
		this.age = a;
	}
	public void setPassport(string numberPassport) {
		passport = numberPassport;
        Console.WriteLine(this.passport);
    }
	public string? getPassport()
	{
		return this.passport;
	}

}
