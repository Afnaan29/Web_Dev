import time as t

times = []
mistakes = 0

print('Type the word "Hello" to test your speed ')
input("Press enter to Start: ")
while len(times) < 5:
    start = t.time()
    word = input("Type the word : ").lower()
    end = t.time()
    time_taken = end - start 
    times.append(round(time_taken))

    if word!= "hello":
        mistakes += 1

print("you made ", str(mistakes), "mistakes")
print("Now lets see your time (in seconds):- ")

t.sleep(3)

print(times)