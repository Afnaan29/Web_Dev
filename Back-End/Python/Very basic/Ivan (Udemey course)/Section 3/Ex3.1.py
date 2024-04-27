height = float(input("Enter your height : "))
weight = float(input("Enter your Weight : "))

BMI = weight/(height * height)
print(round(BMI,2))

if BMI <= 18.5:
    print("Underweight")
elif BMI > 18.5 and BMI <=24.9:
    print("normal Weight")    
elif BMI > 24.9 and BMI <= 29.9:
    print("overweight")
else:
    print("obesity")
