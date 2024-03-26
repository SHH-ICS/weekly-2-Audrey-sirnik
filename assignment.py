import math
print("welcome")
print("area and circumference calulator")
while 1:
  print("Enter diameter here")
  diameter = input()
  if diameter.isnumeric() == True:
    d = float(diameter)
    r = float(d/2)
    print("results")
    print("area is:",r**2*math.pi)
    print("circumference is:",d*math.pi)
    break
  else:
    print("error")
    print("please ensure the value you entered is a positive number without units or characters")
    print("try again")
    continue