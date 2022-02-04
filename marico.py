import pyttsx3
import speech_recognition as sr

import mysql.connector

conn=mysql.connector.connect(host="localhost",user="root",password="",database="sensor" )
cursor=conn.cursor()
selectquery="select * from power"
cursor.execute(selectquery)
records=cursor.fetchall()
# print ("count",cursor.rowcount)

for row in records:
    voltage=row[0]
    current=row[1]
    frequency=row[2]

cursor=conn.cursor()
selectquery="select * from motor"
cursor.execute(selectquery)
records=cursor.fetchall()
# print ("count",cursor.rowcount)

for row in records:
    speed=row[0]

cursor.close()
conn.close()

Assistant=pyttsx3.init('sapi5')
voices=Assistant.getProperty('voices')
print(voices)
Assistant.setProperty('voices',voices[0].id)

def Speak(audio):
    print("   ")
    Assistant.say(audio)
    print("   ")
    Assistant.runAndWait()


def takecommand():
    command = sr.Recognizer() 
    with sr.Microphone() as source:
        print("Listenning......")
        Speak("Please give the command")
        command.pause_threshold=1
        audio = command.listen(source)
        
        try:
            print("Recognizing.....")
            query=command.recognize_google(audio,language='en-in')
            print(f"You-said:   {query}")
    
        except Exception as Error:
            return "None"
        
        return query.lower()   


Speak("Welcome to Virtual Databse Voice Assistant")


i=5;


query=takecommand()

if "what is the voltage" in query:
    Speak(voltage)

elif "what is the current" in query:
    Speak(current)
elif "what is the frequency"in query:
    Speak(frequency)
elif "what is the speed"in query:
    Speak(speed)

else:
    Speak("no command found")
