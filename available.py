import sys
from ctypes import string_at
from binascii import hexlify
from sys import getsizeof
import binascii
#print sys.argv[1]
'''
fhand1 = open("org_has_animal.txt")
fhand2 = open("orgindex.txt")
fhand3 = open("organization.txt")

import sys
'''

import orgindex
orgindex.main()

#print sys.argv[1]
fhand1 = open("org_has_animal.txt")
fhand2 = open("organization.txt")

l1 = []
l5 = []
l6 = []
l7 = ["|"]
for line1 in fhand1:
    line1 = line1.rstrip()
    l1 = line1.split(" ")
    if(l1[1] == sys.argv[1]):
        l2 = line1.split("|")
        #print(l2)
        for x in l2:
            l3 = x.split()
            #print(l3)
            fhand3 = open("orgindex.txt")
            for line3 in fhand3:
                l4 = line3.split()
                #print(l4)
                if(l4[0] == l3[0]):
                    #print(l4[0],l3[0])
                    fhand2 = open("organization.txt")
                    #print(l4[1])
                    fhand2.seek(int(l4[1]))
                    #for line4 in fhand2:
                    x = fhand2.read().rstrip()
                    l5 = x.split()

                    l6.append(l3 + l5)
                    l6.append(l7)



l6.append("/")
print(l6)



'''
            l3 = x.split()
            fhand2 = open("organization.txt")
            for line2 in fhand2:
                l4 = line2.split()
                if(l4[2] == l3[0]):
                    l5.append(l3 + l4 )
                    l5.append(l6)
l5.append("/")
print(l5)
print("aaaaa")

'''
'''
    for each brli in l1
    if(l1[1] == sys.argv[1]):
        for line2 in fhand2:
            l2 = line2.split()
            if(l2[2] == l1[0]):
                l3 = l1 + l2
                break
print(l3)
'''


'''
import orgindex
orgindex.main()

print(fhand3.seek(4))
start = 1
end = 4    # Just examples
fhand3.seek(start)
stuff = fhand3.read(end - start)
print(stuff)


l3 = []
for line1 in fhand1:
    l1 = line1.split()
    if(l1[1] == "Yorkshire"):
        for line2 in fhand2:
            l2 = line2.split()
            if(l2[0] == l1[0]):
                l2 = fhand3.seek(int(l2[1]),0)
                l3 = l1+l2
                break
print(l3)
'''
