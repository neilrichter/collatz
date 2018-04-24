num = 1
biggest = 0

while True:
    count = 1
    number = num
    while number != 1:
        if number % 2 == 0:
            number = number / 2
        else:
            number = number * 3 + 1
        count += 1

    if count > biggest:
        biggest = count
        log = 'Collatz from ' + str(num) + ' of len ' + str(biggest) + '\n'
        with open('logs.txt', 'a') as logfile:
            logfile.write(log)
    num += 1