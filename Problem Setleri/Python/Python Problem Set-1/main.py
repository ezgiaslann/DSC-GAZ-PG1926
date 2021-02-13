for sayi in range(0,100):
    if sayi == 0:
        continue
    elif sayi % 3 == 0 and sayi % 5 == 0:
        print("FizzBuzz")
        continue
    elif sayi % 3 == 0:
        print("Fizz")
        continue
    elif sayi % 5 == 0:
        print("Buzz")
        continue
    print(sayi)