<?php
def average(numbers):
    """Вычисляет среднее значение элементов массива чисел."""

    # Проверяем, является ли numbers списком
    if not isinstance(numbers, list):
        raise TypeError("Аргумент должен быть списком")

    # Проверяем, содержит ли numbers только числа
    for number in numbers:
        if not isinstance(number, (int, float)):
            raise TypeError("Элементы списка должны быть числами")

    # Считаем сумму чисел
    total = 0
    for number in numbers:
        total += number

    # Возвращаем среднее значение
    return total / len(numbers)


# Получаем массив чисел от пользователя
numbers = input("Введите числа через пробел: ").split()

# Вычисляем среднее значение
avg = average(numbers)

# Выводим среднее значение на экран
print(f"Среднее значение: {avg}")
?>