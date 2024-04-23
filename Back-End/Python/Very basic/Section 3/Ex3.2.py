import random
people = []

while len(people) < 8:
    person = input("Enter your name : ")
    people.append(person)

randompersom = random.randint(0,7)
print(people[randompersom])