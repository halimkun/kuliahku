import csv

f = open("./data/siswa.csv", "r")
reader = csv.reader(f)

for i in reader :
        print(i)

f.close()
