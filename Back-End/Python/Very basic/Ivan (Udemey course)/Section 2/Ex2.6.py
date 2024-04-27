
person = { "name": "Afnaan" , "gender": "male" , "age": "17" , "address": " maharashtra, mumbai 400009,dongri" , "phone": "8104644969"}

info = input("Enter what information you want : ").lower()

print( "The",info,"is" ,person.get(info, "invalid property"))