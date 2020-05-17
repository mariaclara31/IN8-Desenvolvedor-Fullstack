import doctest
import json

class Object:
    attribute_0 = None
    attribute_1 = None
    attribute_2 = None
    def __init__(self, attribute_0 = None, attribute_1 = None, attribute_2 = None):
        self.attribute_0 = attribute_0
        self.attribute_1 = attribute_1
        self.attribute_2 = attribute_2
    def setAttribute_0(self, attribute_0):
        self.attribute_0 = attribute_0
    def getAttribute_0(self):
        temp_attribute_0 = self.attribute_0
        return temp_attribute_0
    def setAttribute_1(self, attribute_1):
        self.attribute_1 = attribute_1
    def getAttribute_1(self):
        temp_attribute_1 = self.attribute_1
        return temp_attribute_1
    def setAttribute_2(self, attribute_2):
        self.attribute_2 = attribute_2
    def getAttribute_2(self):
        temp_attribute_2 = self.attribute_2
        return temp_attribute_2

    def getList(self):
        return[self.getAttribute_0(), self.getAttribute_1(), self.getAttribute_2()]
    def getDict(self):
        dict = {}
        dict['attribute_0'] = self.getAttribute_0()
        dict['attribute_1'] = self.getAttribute_1()
        return dict
    def getMultiplica(self):
        attributes_list = self.getList()
        return attributes_list[0]*attributes_list[1]*attributes_list[2]
def run():
    object_a = Object()
    print('object_a.getList', json.dumps(object_a.getList(), indent=4))
    print('object_a.getDict', json.dumps(object_a.getDict(), indent=4))

    print('-\t-\t-\t-\t-')

    object_a.setAttribute_0(0)
    object_a.setAttribute_1(1)
    object_a.setAttribute_2(2)
    print('object_a.getList', json.dumps(object_a.getList(), indent=4))
    print('object_a.getDict', json.dumps(object_a.getDict(), indent=4))
    print('object_a.getMultiplica', object_a.getMultiplica())

    print('-\t-\t-\t-\t-')

    object_a = Object('0','1','2')
    print('object_a.getList', json.dumps(object_a.getList(), indent=4))
    print('object_a.getDict', json.dumps(object_a.getDict(), indent=4))

if __name__ == "__main__":
    test = doctest.testmod()
    if test.failed == 0:
        run()

    