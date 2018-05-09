import RPi.GPIO as GPIO
import time
from datetime import datetime
import sqlite3

GPIO.setmode(GPIO.BCM)
GPIO.setup(17, GPIO.OUT)
GPIO.setup(27, GPIO.OUT)

GPIO.output(17, GPIO.LOW)
GPIO.output(27, GPIO.LOW)
time.sleep(30)
GPIO.output(17, GPIO.HIGH)
GPIO.output(27, GPIO.LOW)
time.sleep(10)
GPIO.output(27, GPIO.HIGH)
time.sleep(2)
GPIO.cleanup()

conn = sqlite3.connect('/var/www/html/include/smartfarm.db')
DATETIME = datetime.now().strftime('%Y/%m/%d %H:%M:%S')
cursor = conn.cursor()
cursor.execute("insert into FEED (DATETIME) values (?)", (DATETIME))
conn.commit()
conn.close()

