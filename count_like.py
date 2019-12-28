import mysql.connector
import sys

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="interstellar"
)

post_id=sys.argv[1]

post_id=str(post_id)

mycursor = mydb.cursor()

sql = "SELECT id FROM likes WHERE post_id="+post_id

mycursor.execute(sql)

myresult = mycursor.fetchall()

print(len(myresult))

