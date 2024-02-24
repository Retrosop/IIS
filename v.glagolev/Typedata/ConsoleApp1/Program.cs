using System.Runtime.CompilerServices;
using System.Runtime.InteropServices.ObjectiveC;

class Myprogram
{
	static void Main(string[] args)
	{
        Console.WriteLine("HW");
		var myPerson = new Person("Ivan", 34);
		myPerson.Age = 10;
        Console.WriteLine(myPerson.Age);
		myPerson.InfoPerson("Банк ООО Сбербанк");
    }
}

//private
//protected
//internal
public class MyTypeData
{
	int aInt = 100;
	decimal bDecimal = 1.2m;
	float cFloat = 1.3382388382323f;
	bool dBool = false;
	char eChar = 'a';
	enum DayTime
	{
		Morning,
		Afternoon,
		Evening,
		Night
	};
	//struct gStruct;

	//Ссылочные типиы
	//object myobj;
	string str;
	//class nClass;
	//interface rInterface;
	//delegate kDelegate;

}

public class Person
{
	string name;
	private int age;

	public int Age
	{
		set
		{
			if (value < 1 || value > 120)
				Console.WriteLine("Возраст должен быть валиден");
			else
				this.age = value;
		}
		get
		{
			return this.age;
		}
	}
    public Person(string n, int a)
    {
		this.name = n;
		this.age = a;
    }
	public void InfoPerson(string infoTo)
	{
        Console.WriteLine($"Сформирован для {infoTo} Персона {this.name} {this.age}");
    }
	public void InfoPerson(string infoTo, int infoPeriod)
	{
		Console.WriteLine($"Сформирован для {infoTo} Персона {this.name} {this.age} Период {infoPeriod}");
	}
}