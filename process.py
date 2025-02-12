import sys
import math
import random

def number_puzzle(num):
    if num % 2 == 0:
        return f"The number {num} is even. Square root: {math.sqrt(num):.2f}"
    else:
        return f"The number {num} is odd. Cube: {num ** 3}"

def text_puzzle(text):
    binary_text = ' '.join(format(ord(c), '08b') for c in text)
    vowels = sum(1 for c in text.lower() if c in "aeiou")
    return f"Binary: {binary_text}\nVowel count: {vowels}"

def treasure_hunt():
    secret_number = random.randint(1, 100)
    attempts = 5
    for _ in range(attempts):
        guess = random.randint(1, 100) 
        if guess == secret_number:
            return f"Treasure found! The number was {secret_number}"
    return f"Game over. The correct number was {secret_number}"

if __name__ == "__main__":
    if len(sys.argv) < 3:
        print("Invalid input.")
        sys.exit(1)

    number = int(sys.argv[1])
    text = sys.argv[2]

    result1 = number_puzzle(number)
    result2 = text_puzzle(text)
    result3 = treasure_hunt()

    print(result1)
    print(result2)
    print(result3)