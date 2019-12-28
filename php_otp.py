import smtplib
import random
import sys
a=random.randint(1000,9999)
otp=str(a)
print(a)
#user_email=input("Enter Your email id:")
user_email=sys.argv[1]
conn =smtplib.SMTP('smtp.gmail.com', 587)
conn.ehlo()
conn.starttls()
conn.login('havenszen@gmail.com', 'zenhavens2019.')
conn.sendmail('havenszen@gmail.com', user_email, otp+" is your OTP")
conn.quit()