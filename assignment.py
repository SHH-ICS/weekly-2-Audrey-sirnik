import math
print("welcome")
print("area and circumference calulator")
print("Enter diameter here")
diameter = input()
if diameter.isnumeric() == True:
  d = float(diameter)
  if d > 0:
    r = float(d/2)
    print("results")
    print("area is:",r**2*math.pi)
    print("circumference is:",d*math.pi)
else:
  print("error")
  print("please ensure the value you entered is a positive number without units or characters")