def main():
    fhand1 = open("organization.txt")
    fhand2 = open("orgindex.txt","w")
    x = 0
    y = 0
    for line in fhand1:
        l1 = line.split()
        x = x  + y
        y = len(line) - 1
        fhand2.write(l1[2]+" "+str(x)+"\n")
