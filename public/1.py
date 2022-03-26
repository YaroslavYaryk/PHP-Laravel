def fib(n):
    previous, fib_number = 0, 1
    for _ in range(2, n + 1):
        previous, fib_number = fib_number, previous + fib_number
    return fib_number


def productFib(prod):
    i = 0
    while fib(i-1) < prod:
        if fib(i) * fib(i+1) == prod:
            return [fib(i), fib(i+1), True]
        elif fib(i)*fib(i+1) < prod < fib(i+1)*fib(i+1):
            return [fib(i+1), fib(i+2), False]
        i += 1


print(productFib(4895))
