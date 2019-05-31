import sys
fhand = open("donate.txt","a")
fhand.write("\n"+sys.argv[1]+"\t"+sys.argv[2]+"\t"+sys.argv[3])#+"\t"+sys.argv[5]")
