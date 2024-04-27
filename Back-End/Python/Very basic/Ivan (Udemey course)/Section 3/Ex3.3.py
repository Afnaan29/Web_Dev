import random

colors = ["red","blue", "Green","purple","orange","gray","black","white"]
print("Guess the color from the folowing: ", colors)
while True:

    color = colors[random.randint(0,len(colors)-1)]
    guess = input("I am thinking about a color an you guess it? ")

    while True:
        if guess.lower() == color:
            break
        else:
             guess = input("Nope try again! ")
    print("You Guessed it right it was ",color)
    play_again = input("DO you want to play again? enter 'no' to quit : ")
    if play_again.lower() == "no":
        break
print("it was fun playing with you")

