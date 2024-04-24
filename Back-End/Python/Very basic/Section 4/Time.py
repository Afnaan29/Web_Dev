import time as t

Time_now = t.localtime()
print(t.localtime())

print("Transaction completed at " , str(Time_now.tm_hour)+ "H " + str(Time_now.tm_min)+ "M " +str(Time_now.tm_sec)+ "sec ")