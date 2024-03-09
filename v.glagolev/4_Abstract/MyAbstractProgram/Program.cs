class MyProgram
{
	public static void Main()
	{
		PhoneMessage myPhone = new PhoneMessage("+79681370000");
		myPhone.GetMessage("+79004150000","Как дела? Встреча завтра");

		SocMessage socVk = new SocMessage("vlad", "vk.com");
		socVk.GetMessage("ivan", "Завтра на отдых");

		MailMessage mailMes = new MailMessage("Влад Владимиров", "Москва, Ленина 4");
		mailMes.GetMessage("Иван Иванов", "Регистрация на конференцию");

	}
}

abstract class Message
{
	public abstract void GetMessage(string source, string mes);
}

class PhoneMessage : Message
{
	string numberPhone;
    public PhoneMessage(string n)
    {
        numberPhone = n;
    }
	public override void GetMessage(string in_phoneNumber, string in_mes)
	{
		Console.WriteLine($"Cообщение получено {in_mes} от {in_phoneNumber}");
	}
}

class SocMessage : Message
{
	string nameAccount;
	string nameSoc;
	public SocMessage(string n, string s)
	{
		nameAccount = n;
		nameSoc = s;
	}
	public override void GetMessage(string in_nameAccount, string in_mes)
	{
		Console.WriteLine($"Cообщение получено {in_mes} от {in_nameAccount}@{this.nameSoc}");
	}
}
class MailMessage : Message
{
	string fio;
	string adress;
	public MailMessage(string f, string a)
	{
		fio = f;
		adress = a;
	}

	public override void GetMessage(string in_source, string in_mes)
	{
		Console.WriteLine("Получено письмо {in_source} примечание {in_mes}");
	}
}
