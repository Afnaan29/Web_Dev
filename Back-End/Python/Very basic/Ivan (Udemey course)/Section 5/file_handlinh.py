f = open("test.txt", "w")
f.write("This has overwritten the contents of the file booya")

file = open("test.txt","w")
file.write("\nThis text will overwrite the contents in file")

file = open("test3.txt","x")
file.write("\nThis text will not overwrite the contents in file but append it")

file = open("test3.txt")
print(file.read())

file = open("test.txt")
print(file.read())

