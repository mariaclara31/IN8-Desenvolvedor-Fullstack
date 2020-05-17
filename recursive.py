import doctest

def run(divisible_list = [], start = 1):
    divisible_count = 0
    for disivible in divisible_list:
        if not (start/disivible)%1:
            divisible_count += 1
    if len(divisible_list) == divisible_count:
        print(start)
    else:
        run(divisible_list = divisible_list, start = start+1)
if __name__ == "__main__":
    test = doctest.testmod()
    if test.failed == 0:
        divisible_list = [2,3,10]
        run(divisible_list=divisible_list)