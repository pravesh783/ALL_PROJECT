row=int(input("Enter the lenght of row :"))
col=int(input("Enter the length of coloumn:"))

for i in range(row):
	for j in range(col):
		if((j == 0)or (j==col-1 and(i!=0 and i!=i//2 and i!=row-1))):
			print("*",end="")
		elif((i==0 or i==row-1 or i==row//2) and (j>0 and j<col-1)):
			print("*",end="")
		else:
			print(" ",end="")
	print()