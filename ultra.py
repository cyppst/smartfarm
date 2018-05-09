import RPi.GPIO as GPIO  # Import GPIO library
import time

from datetime import datetime
import sqlite3

conn = sqlite3.connect('include/smartfarm.db')

GPIO.setmode(GPIO.BCM)  # Set GPIO pin numbering

TRIG = 14  # Associate pin 23 to TRIG
ECHO = 15  # Associate pin 24 to ECHO

print ("Distance measurement in progress")

GPIO.setup(TRIG, GPIO.OUT)  # Set pin as GPIO out
GPIO.setup(ECHO, GPIO.IN)  # Set pin as GPIO in

while True:

    GPIO.output(TRIG, False)  # Set TRIG as LOW
    print ("Waitng For Sensor To Settle")
    time.sleep(2)  # Delay of 2 seconds

    GPIO.output(TRIG, True)  # Set TRIG as HIGH
    time.sleep(0.00001)  # Delay of 0.00001 seconds
    GPIO.output(TRIG, False)  # Set TRIG as LOW

    while GPIO.input(ECHO) == 0:  # Check whether the ECHO is LOW
        pulse_start = time.time()  # Saves the last known time of LOW pulse

    while GPIO.input(ECHO) == 1:  # Check whether the ECHO is HIGH
        pulse_end = time.time()  # Saves the last known time of HIGH pulse

    pulse_duration = pulse_end - pulse_start  # Get pulse duration to a variable

    distance = pulse_duration * 17150  # Multiply pulse duration by 17150 to get distance
    distance = round(distance, 2)  # Round to two decimal points
    print ("Distance:", distance - 0.5, "cm")
    if distance > 10:
        DATETIME = datetime.now().strftime('%Y/%m/%d %H:%M:%S')
        cursor = conn.cursor()
        cursor.execute("insert into CM (CM, DATETIME) values (?, ?)", (distance, DATETIME))
        conn.commit()
        print("datetime %s:", DATETIME)

    time.sleep(2)
    if distance > 10:  # Check whether the distance is within range
        # print ("Distance:",distance - 0.5,"cm")  #Print distance with 0.5 cm calibration
        GPIO.setmode(GPIO.BCM)
        GPIO.setup(4, GPIO.OUT)
        GPIO.output(4, GPIO.HIGH)
        time.sleep(1)

    else:
        print ("Out Of Range:", distance - 0.5, "cm")
        GPIO.setmode(GPIO.BCM)
        GPIO.setup(4, GPIO.OUT)
        GPIO.output(4, GPIO.LOW)
        time.sleep(1)
