

add = lambda x,y: print("The additon of ", x , "and", y ,"is" ,x + y )
sub = lambda x,y: print("The subtraction of ", x , "and", y ,"is" ,x - y )
mul = lambda x,y: print("The multiplication of ", x , "and", y ,"is" ,x * y ) 
div = lambda x,y: print("The division of ", x , "and", y ,"is" ,x / y )


# data validation



        


def cal(fx):
    data_valid = False

    while data_valid == False:
        a = input("Enter the value of x: ")

        try:
           a = float(a)
           a > 0
        except:
           print("Invalid!!! please enter a valid number")
           continue

     
        if a < 0:
         print("The value of x should not be zero or negative: ")
         continue
        else:
            data_valid = True

    data_valid = False

    while data_valid == False:
        b = input("Enter the value of b: ")

        try:
           b = float(b)
           b > 0
        except:
           print("Invalid!!! please enter a valid number")
           continue

        if a < 0:
         print("The value of x should not be zero or negative: ")
         continue
        else:
            data_valid = True
    
    return fx(a,b)
   



print(cal(add))
print(cal(sub))
print(cal(mul))
print(cal(div))