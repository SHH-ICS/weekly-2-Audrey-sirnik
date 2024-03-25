import math
print("Enter diameter here")
diameter = input()
if diameter.isdigit == True:
  d = float(diameter)
  if d > 0:
    r = float(d/2)
    print("results")
    print("area is:",r**2*math.pi)
    print("circumference is:",d*math.pi)
else:
  print("error")