# print country code product code and batch numeber 

product_num = "037-00901-00027"

country_code = product_num[0:3]
print("Country Code is " , country_code)

product_code = product_num[4:9]
print("Product Code is " , product_code)

batch_num = product_num[10:]
print("Batch number is " , batch_num)