<?php

class Student
{
	private string $name;
	private string $surname;
	private int $age;
	private int $course;


	public function __construct(string $name, string $surname, int $age, int $course)
	{
		$this->setName($name);
		$this->setSurname($surname);
		$this->setAge($age);
		$this->setCourse($course);
	}

	public function setName(string $name): void
	{
		$name = trim($name); //trim для удаления пробелов
		if (strlen($name) < 2) {
			throw new InvalidArgumentException("Имя должно содержать минимум 2 символа");
		}
		if (!preg_match('/^[a-zA-Zа-яА-ЯёЁ\s\-]+$/u', $name)) {
			throw new InvalidArgumentException("Имя содержит недопустимые символы");
		}
		$this->name = $name;
	}

	public function setSurname(string $surname): void
	{
		$surname = trim($surname);
		if (strlen($surname) < 2) {
			throw new InvalidArgumentException("Фамилия должна содержать минимум 2 символа");
		}
		if (!preg_match('/^[a-zA-Zа-яА-ЯёЁ\s\-]+$/u', $surname)) {
			throw new InvalidArgumentException("Фамилия содержит недопустимые символы");
		}
		$this->surname = $surname;
	}

	public function setAge(int $age): void
	{
		if ($age < 16 || $age > 70) {
			throw new InvalidArgumentException("Возраст должен быть от 16 до 70 лет");
		}
		$this->age = $age;
	}

	public function setCourse(int $course): void
	{
		if ($course < 1 || $course > 6) {
			throw new InvalidArgumentException("Курс должен быть от 1 до 6");
		}
		$this->course = $course;
	}

	// ГЕТТЕРЫ (просто возвращают значения)
	public function getName(): string
	{
		return $this->name;
	}

	public function getSurname(): string
	{
		return $this->surname;
	}

	public function getAge(): int
	{
		return $this->age;
	}

	public function getCourse(): int
	{
		return $this->course;
	}


	public function displayInfo(): void
	{
		echo "Студент: {$this->name} {$this->surname}<br>";
		echo "Возраст: {$this->age} лет<br>";
		echo "Курс: {$this->course}";
		echo "<br><br>";
	}

}

try {
	$student1 = new Student('Иван', 'Иванов', 20, 3);
	$student1->displayInfo();

	$student2 = new Student('Мария', 'Петрова', 19, 2);
	echo $student2->displayInfo() . "<br><br>";

	$student1->setName('Алексей');
	$student1->setCourse(4);
	$student1->displayInfo();
} catch (InvalidArgumentException $e) {

	echo "Ошибка в данных студента: " . $e->getMessage();

} catch (Exception $e) {
	echo "Произошла непредвиденная ошибка: " . $e->getMessage();
	error_log("Ошибка в студенте: " . $e->getMessage());
}

