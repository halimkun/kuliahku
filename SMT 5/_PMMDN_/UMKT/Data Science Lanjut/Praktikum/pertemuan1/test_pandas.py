import pandas as pd

url = "https://raw.githubusercontent.com/taghfirulyoga88/DataScienceAdvanced/main/Dataset/penduduk_gender_head.csv"

table = pd.read_csv(url)
table.head

print(table)