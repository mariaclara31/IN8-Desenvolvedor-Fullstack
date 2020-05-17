import doctest

def sum_list(list = []):
    element = None
    if list:
        element = 0
        for object in list:
            element += object
    return element

def run(multiple_list = [], max = 0):
    multiple_max_list = []
    for number in range(0, max):
        multiple_count = 0
        for multiple in multiple_list:
            if not (number/multiple)%1:
                multiple_count += 1
        if multiple_count > 0:
            multiple_max_list.append(number)
    print(sum_list(multiple_max_list))

if __name__ == "__main__":
    test = doctest.testmod()
    if test.failed == 0:
        multiple_list = [3,5]
        max = 1000
        run(multiple_list = multiple_list, max = max)