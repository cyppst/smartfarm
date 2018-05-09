import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)
GPIO.setup (17, GPIO.OUT)
GPIO.setup (27, GPIO.OUT)

GPIO.output(17,GPIO.LOW)
GPIO.output(27,GPIO.LOW)
time.sleep(30)
GPIO.output(17,GPIO.HIGH)
GPIO.output(27,GPIO.LOW)
time.sleep(10)
GPIO.output(27,GPIO.HIGH)

time.sleep(36000)

GPIO.output(17,GPIO.LOW)
GPIO.output(27,GPIO.LOW)
time.sleep(30)
GPIO.output(17,GPIO.HIGH)
GPIO.output(27,GPIO.LOW)
time.sleep(10)
GPIO.output(27,GPIO.HIGH)

time.sleep(2)
GPIO.cleanup()

