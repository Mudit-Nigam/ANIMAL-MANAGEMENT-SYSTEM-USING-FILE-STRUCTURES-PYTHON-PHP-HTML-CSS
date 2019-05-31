import sys
#print sys.argv[1]


fhand = open("report.txt","a")
for i in range(1,len(sys.argv)):
    fhand.write(sys.argv[i]+" ")
fhand.write("\n")
