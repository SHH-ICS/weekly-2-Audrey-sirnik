import math
print("welcome")
print("area and circumference calulator")
while 1:
  print("Enter diameter here")
  diameter =input()
  try:
    d = float(diameter)
    if d>=0:
      r = float(d/2)
      print("results")
      print("area is:",r**2*math.pi)
      print("circumference is:",d*math.pi)
      continue
    else:
      print("error")
      print("please ensure the value you entered is a positive number without units or characters")
      print("try again")
      continue
  except:
    print("error")
    print("please ensure the value you entered is a positive number without units or characters")
    print("try again")
    continue