import sqlite3
from datetime import datetime

conn = sqlite3.connect('smartfarm.db')
DATETIME = datetime.now().strftime('%Y/%m/%d %H:%M:%S')

print(DATETIME);

cursor = conn.cursor()
cursor.execute("insert into CM (CM, DATETIME) values (?, ?)",(CM, DATETIME))

conn.commit()
conn.close()