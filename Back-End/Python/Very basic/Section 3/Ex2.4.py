months= ("Jan" , "Feb" , "mar", "apr" ,"may", "june" ,"july", "aug" ,"sept" ,"oct" ,"nov" ,"dec")

date = input("Enter yot birthday in DD-MM-YYYY format \n")
# 16-05-2006
date2 = int(date[3:5]) - 1

print("You were born in " , months[date2])