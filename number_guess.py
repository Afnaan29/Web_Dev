import random

num = random.randint(0,100)
i = 0

guess = int(input("Can you guess the number, its's between 0 to 100: "))

while i < 5:
    i += 1
    if guess==num:
        print("WOW you guessed it right")
        break
    elif i >= 5:
        print("You are a loser")
    elif guess!=num and num >= 90 and num <= 100:
        guess = int(input("Try again, its's between 90 to 100 "))
    elif guess!=num and num >= 80 and num <= 90:
        guess = int(input("Try again, its's between 80 to 90 "))
    elif guess!=num and num >= 70 and num <= 80:
        guess = int(input("Try again, its's between 70 to 80 "))
    elif guess!=num and num >= 60 and num <= 70:
        guess = int(input("Try again, its's between 60 to 70 ")) 
    elif guess!=num and num >= 50 and num <= 60:
        guess = int(input("Try again, its's between 50 to 60 "))
    elif guess!=num and num >= 40 and num <= 50:
        guess = int(input("Try again, its's between 40 to 50 "))
    elif guess!=num and num >= 30 and num <= 50:
        guess = int(input("Try again, its's between 30 to 40 "))
    elif guess!=num and num >= 20 and num <= 50:
        guess = int(input("Try again, its's between 20 to 30 "))
    elif guess!=num and num >= 10 and num <= 50:
        guess = int(input("Try again, its's between 10 to 20 "))
    elif guess!=num and num >= 0 and num <= 50:
        guess = int(input("Try again, its's between 0 to 10 "))

print(num)
